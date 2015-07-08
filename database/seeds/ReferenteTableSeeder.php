<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ReferenteTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create('es_ES');

        for($i = 0; $i < 50; $i ++)
        {
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;
            $name = $faker->name;

            $id = \DB::table('referentes')->insertGetId(array (
                'nombre'     => $firstName,
                'apellido'   => $lastName,
                'full_name'      => "$firstName $lastName"
            ));
        }
    }

} 