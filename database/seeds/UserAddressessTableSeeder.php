<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserAddress;


class UserAddressessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$user_id = User::all()->pluck('id')->toArray();

    	$faker = app(Faker\Generator::class);
        //
        $user_addresses = factory(UserAddress::class)->times(100)->make()->each(function($useraddress) use ($user_id , $faker){

        	$useraddress->user_id = $faker->randomElement($user_id);
        });

        UserAddress::insert($user_addresses->toArray());
    }
}
