<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoriaTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        for($i = 0; $i < 8; $i ++)
        {
            $descripcion = $faker->realText($maxNbChars = 10, $indexSize = 1);

            \DB::table('categorias')->insert(array (
                'descripcion'  => $descripcion
            ));

        }
    }

} 