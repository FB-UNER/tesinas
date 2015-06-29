<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder {

    public function run()
    {
        \DB::table('users')->insert(array (
            'first_name'  => 'Javier',
            'last_name'   => 'Parra',
            'email'       => 'jparra@fb.uner.edu.ar',
            'password'    => \Hash::make('decanova'),
            'type'        => 'admin',
            'full_name'   => 'Parra Javier'
        ));

        \DB::table('user_profiles')->insert(array (
            'user_id' => 1,
            'birthdate' => '1980/07/22'
        ));
    }

} 