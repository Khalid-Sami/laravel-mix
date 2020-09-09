<?php

use Illuminate\Database\Seeder;

class CountryTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i=0; $i <= 30; $i++){
            \App\Country::create([
                'country' => $faker->country,
                'capital' => $faker->city
            ]);
        }
    }
}
