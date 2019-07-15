<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Models\ProductSku;
use App\Models\UserAddress;
use App\Models\Order;
use Carbon\Carbon;
use App\Exceptions\InvalidRequestException;
use App\Jobs\CloseOrder;
use App\Services\OrderService;




class OrdersController extends Controller
{

	// 实现用户端的订单列表页
	public function index(Request $request)
    {
        $orders = Order::query()
            // 使用 with 方法预加载，避免N + 1问题
            ->with(['items.product', 'items.productSku']) 
            ->where('user_id', $request->user()->id)
            ->orderBy('created_at', 'desc')
            ->paginate();

        return view('orders.index', ['orders' => $orders]);
    }


    // 实现订单详情页面。 
    public function show(Order $order, Request $request){
    	try{
			$this->authorize('own', $order);
		}catch(AuthorizationException $e){
			throw new InvalidRequestException('权限不够');
		}

		return view('orders.show', ['order'=>$order->load('items.product', 'items.productSku')]);
    }


    // 订单写入数据库   利用 Laravel 的自动解析功能注入 CartService 类
	public function store(OrderRequest $request, OrderService $orderService)
    {
        $user  = $request->user();
        $address = UserAddress::find($request->input('address_id'));
        
        return $orderService->store($user, $address, $request->input('remark'), $request->input('items'));
    }


    // 确认收货的接口：
    public function received(Order $order, Request $request){

        $this->authorize('own' , $order);

        // 判断订单的发货状态是否为已发货
        if ($order->ship_status !== Order::SHIP_STATUS_DELIVERED) {
            throw new InvalidRequestException('发货状态不正确');
        }

        // 更新发货状态为已收到
        $order->update(['ship_status' => Order::SHIP_STATUS_RECEIVED]);

        // 返回订单信息
        return $order;
    }






    //
}
