<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;

class ProductFactory extends Factory 
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $states = [Product::STATE_NEW, Product::STATE_USED]; 
        

        return [
            'name' => $this->faker->name(),
            'description'=> $this->faker->sentence(),
            'price' => $this->faker->numberBetween(5, 50),
            'image'=> $this->faker->word(),
            'state'=> $this->faker->randomElement($states),
            'location' => $this->faker->address()
        ];
   
    }

    public function brandNew()
    {
        return $this->state(function (array $attributes) {
            return [
                'state' => Product::STATE_NEW,
            ];
        });
    }

    
    public function used()
    {
        return $this->state(function (array $attributes) {
            return [
                'state' => Product::STATE_USED,
            ];
        });
    }
}
