<?php

namespace Database\Factories;

use App\Models\brand;
use App\Models\category;
use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'brand_id'=>brand::all()->random()->id,
                'category_id'=>category::all()->random()->id,
            'name'=>$this->faker->name,
            'slug'=>$this->faker->name,
            'image'=>$this->faker->name,
            'cost'=>$this->faker->biasedNumberBetween,
            'description'=>$this->faker->name,
        ];
    }
}
