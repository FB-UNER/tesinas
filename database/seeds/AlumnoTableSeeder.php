<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AlumnoTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create('es_ES');

        for($i = 0; $i < 100; $i ++)
        {
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;

            $name = $faker->firstName;
            $apellido = $faker->lastName;

            \DB::table('alumnos')->insert(array (
                'apellido'  => $apellido,
                'nombres'   => $name,
                'full_name'      => "$firstName $lastName",
                'email'     => $faker->unique()->email
            ));

        }
    }

} 