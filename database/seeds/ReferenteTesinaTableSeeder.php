<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ReferenteTesinaTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create('es_ES');

        for($i = 0; $i < 10; $i ++)
        {

            \DB::table('referente_tesina')->insert(array (
                'referente_id'                     => $faker->numberBetween($min = 1, $max = 24),
                'tesina_id'                        => $faker->unique()->numberBetween($min = 1, $max = 24)
            ));

        }
    }

} 