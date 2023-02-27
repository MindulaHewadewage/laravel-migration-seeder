<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        for ($i = 0; $i < 5; $i++) {
            $train = new Train();
            $train->company = $faker->company();
            $train->from = $faker->city();
            $train->to = $faker->city();
            $train->departure = $faker->time();
            $train->arrive = $faker->time();
            $train->pnr = $faker->randomNumber(5, true);
            $train->coaches = $faker->randomNumber(2, false);
            $train->in_time = $faker->boolean();
            $train->is_cancelled = $faker->boolean();
            $train->save();
        }
    }
}
