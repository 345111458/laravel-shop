<?php

use Illuminate\Database\Seeder;
use App\Models\CouponCode;


class CouponCodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(\App\Models\CouponCode::class, 100)->create();
    	// $coupon = factory(CouponCode::class)->times(100)->make();
    	// CouponCode::insert($coupon->toArray());
        //
    }
}
