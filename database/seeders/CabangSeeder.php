<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($loop = 0; $loop < 5; $loop++) {
            
            DB::table("cabangs")->insert([
                "name" => $faker->name(),
                "kubikasi1" => $faker->numberBetween(45, 95),
                "kubikasi2" => $faker->numberBetween(45, 95),
                "kubikasi3" => $faker->numberBetween(45, 95),
                "kubikasi4" => $faker->numberBetween(45, 95),
                "keterangan" => $faker->randomElement(["wado", "cisitu", "darmaraja", "situraja", "jatinangor"])
            ]);
        }
    }
}
