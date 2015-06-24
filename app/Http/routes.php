<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
    'users' => 'UsersController',
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is_admin'], 'namespace' => 'Admin'], function () {

    Route::resource('users', 'UsersController');

});


Route::get('insertar', function()
{
   $referente = new \Course\Referente();
   $referente->nombre = 'Juan';
   $referente->apellido = 'Repostre';
   $referente->save();

   $tesinas = new \Course\Tesina();
   $tesinas->titulo = 'Primera Tesis';
   $tesinas->save();
});


Route::get('registrar', function()
{

    $referente = \Course\Referente::find('2');
    $tesina = \Course\Tesina::find('3');
    $referente->tesinas()->save($tesina);

});
