<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ReferenteTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        for($i = 0; $i < 50; $i ++)
        {
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;

            $id = \DB::table('referentes')->insertGetId(array (
                'nombre'     => $firstName,
                'apellido'      => $lastName
            ));
        }
    }

} 