<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class SendReviewRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    // 由于我们需要对用户提交的数据进行校验，因此需要先创建一个 Request 类：
    public function rules()
    {
        return [
            'reviews'          => ['required', 'array'],
            'reviews.*.id'     => [
                'required',
                Rule::exists('order_items', 'id')->where('order_id', $this->route('order')->id)
            ],
            'reviews.*.rating' => ['required', 'integer', 'between:1,5'],
            'reviews.*.review' => ['required'],
        ];
    }



    public function attributes(){

        return [
            'reviews.*.rating' => '评分',
            'reviews.*.review' => '评价',
        ];
    }




}
