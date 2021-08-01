<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, '1')->create([
        	'email' => 'admin@admin.com',
        	'role' => 'admin'
        ]);
        factory(App\User::class, '1')->create([
        	'email' => 'customer@customer.com',
        	'role' => 'customer'
        ]);

        factory(App\Models\Categories::class, 5)->create();
        factory(App\Models\Brands::class, 6)->create();
        factory(App\Models\Products::class, 200)->create();
    }
}
