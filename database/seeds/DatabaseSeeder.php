<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(UserAddressessTableSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(CouponCodeTableSeeder::class);
        $this->call(OrdersSeeder::class);
    }
}
