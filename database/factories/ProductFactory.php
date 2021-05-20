<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $randomSubCategory = mt_rand(1, SubCategory::count());
        return [
            //
            'name' => $this->faker->name,
            'price' => $this->faker->numberBetween(5,1000),
            'description' => $this->faker->text,
            'quantity' => $this->faker->numberBetween(1, 1000),
            'tags' => $this->faker->word,
            'sub_category_id' => $randomSubCategory,
        ];
    }
}
