<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id'=>Category::all()->random()->id,
            'slug'=>uniqid(time()),
            'name'=>$this->faker->name,
            'image'=>'image/user.png',
            'description'=>$this->faker->text,
            'price'=>20*random_int(1,10)*random_int(1,50),
            'view_count'=>90
        ];
    }
}
