<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{

	protected $fillable = [
		'province',
        'city',
        'district',
        'address',
        'zip',
        'contact_name',
        'contact_phone',
        'last_used_at',
	];


	protected $datas = 'last_used_at';


	// 只能属于一个 
	public function user(){

		return $this->belongsTo(User::class);
	}


	//创建了一个访问器
	public function getFullAddressAttribute(){

		return "{$this->province}{$this->city}{$this->district}{$this->address}";
	}


    //
}
