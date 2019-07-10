<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAddress;
use App\Http\Requests\UserAddressRequest;


class UserAddressesController extends Controller
{
    //

	public function index(Request $request){
		
        return view('user_addresses.index', [
            'addresses' => $request->user()->addresses()->paginate(5)
        ]);
    }


    public function create(){


        return view('user_addresses.create_and_edit', ['address' => new UserAddress()]);
    }



    public function store(UserAddressRequest $request){

        $request->user()->addresses()->create($request->only([
            'province',
            'city',
            'district',
            'address',
            'zip',
            'contact_name',
            'contact_phone',
        ]));

        return redirect()->route('user_addresses.index');
    }


    public function edit(UserAddress $user_address){
        $this->authorize('update' , $user_address);

        return view('user_addresses.create_and_edit', ['address' => $user_address]);
    }


    public function update(UserAddress $user_address , UserAddressRequest $request){
        $this->authorize('update' , $user_address);

        $user_address->update($request->only([
            'province',
            'city',
            'district',
            'address',
            'zip',
            'contact_name',
            'contact_phone',
        ]));

        return redirect()->route('user_addresses.index');
    }


    // 删除地址的控制器和路由
    public function destroy(UserAddress $user_address){
        $this->authorize('update' , $user_address);

        $user_address->delete();

        return json_encode(['data'=>'sssssssss']);
    }



    
}
