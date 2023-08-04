<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class barangseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 5000; $i++) {
            DB::table('barang')->insert([
                'nama' => $faker->unique()->word,
                'code' => $faker->unique()->bothify('???-###'),
                'discount' => $faker->numberBetween(1, 50),
                'stok' => $faker->numberBetween(1, 10000),
                'category' => $faker->randomElement(['Category A', 'Category B', 'Category C']),
                'desc' => $faker->sentence,
            ]);
        }
    }
}
