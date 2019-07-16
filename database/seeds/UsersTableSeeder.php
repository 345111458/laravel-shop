<?php

use Illuminate\Database\Seeder;
use App\Models\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(\App\Models\User::class, 100)->create();
    	// $faker = app(Faker\Generator::class);

    	// $users = factory(User::class)->times(10)->make();

    	// $users_array = $users->makeVisible(['password' , 'remember_token'])->toArray();

    	// User::insert($users_array);


        $user = User::find(1);
        $user->email = '345111458@qq.com';
        $user->save();
    }
}
