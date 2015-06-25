<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TesinaTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create('es_ES');

        for($i = 0; $i < 25; $i ++)
        {
            $titulo = $faker->realText($maxNbChars = 50, $indexSize = 2);

            \DB::table('tesinas')->insert(array (
                'titulo'  => $titulo
            ));

        }
    }

} 