<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Repo;

class ReposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){
            $newRepo = new Repo();
            $newRepo->nome = $faker->name;
            $newRepo->eta = $faker->numberBetween($min = 18, $max = 100);
            $newRepo->description = $faker->text($maxNbChars = 200);

            $newRepo->save();
        }
    }
}
