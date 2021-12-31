<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCart;
use App\Models\ProductOrder;
use App\Models\ProductSave;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        'name'=>'User One',
        'email'=>'userone@gmail.com',
        'password'=>Hash::make('password'),
        'image'=>'image/user.png',
        ]);
        User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'role'=>'admin',
            'password'=>Hash::make('password'),
            'image'=>'image/user.png',
        ]);
        Category::factory(5)->create();
        Product::factory(50)->create();
        ProductCart::factory(5)->create();
        ProductOrder::factory(5)->create();
        ProductSave::factory(5)->create();

    }
}
