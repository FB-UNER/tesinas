<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TesinaTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create('es_ES');

        for($i = 0; $i < 25; $i ++)
        {
            $titulo = $faker->text($maxNbChars = 50);

            \DB::table('tesinas')->insert(array (
                'titulo'                        => $titulo,
                'alumno_id'                     => $faker->numberBetween($min = 1, $max = 25),
                'fecha_recepcion'               => $faker->date($format = 'Y-m-d', $max = 'now'),
                'fecha_aprobacion_comision'     => $faker->date($format = 'Y-m-d', $max = 'now'),
                'director_id'                   => $faker->numberBetween($min = 1, $max = 25),
                'co_tutor_id'                   => $faker->numberBetween($min = 1, $max = 25),
                'asesor_id'                     => $faker->numberBetween($min = 1, $max = 25),
                'aprueba_comision_tfi'          => (bool) rand(0, 1)
            ));

        }
    }

} 