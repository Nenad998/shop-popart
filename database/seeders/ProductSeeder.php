<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use Psy\Util\Str;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /** 
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()
            ->count(15)
            ->used()
            ->create();

            //Product()->factory()->create(['state' => 2, '']);




        Product::factory()
            ->count(15)
            ->brandNew()
            ->create();


        // $data [[
        //     'name' => $this->faker->name(),
        //     'description'=> $this->faker->sentence(),
        //     'price' => $this->faker->numberBetween(5, 50),
        //     'state'=> $this->faker->cityPrefix(),
        //     'image'=> $this->faker->word(),
        //     'state'=> $this->faker->buildingNumber(),
        //     'location' => $this->faker->address()
        // ], 
        // 'name' => $this->faker->name(),
        // 'description'=> $this->faker->sentence(),
        // 'price' => $this->faker->numberBetween(5, 50),
        // 'state'=> $this->faker->cityPrefix(),
        // 'image'=> $this->faker->word(),
        // 'state'=> $this->faker->buildingNumber(),
        // 'location' => $this->faker->address()
        // ]


        // DB::table('products')->insert($data);
    }


}
