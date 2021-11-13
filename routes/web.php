<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// * Rutas modulos
    // index
    Route::get('/modulos', 'ModuloController@index')->name('index.modulo');

    //store(insert data)
    Route::post('/modulos/','ModuloController@store')->name('modulo.store');
    //edit
    Route::get('/modulos/{modulo}/edit','ModuloController@edit')->name('modulo.edit');
    //show
    Route::put('/modulos/{modulo}','ModuloController@update')->name('modulo.update');


    //* Rutas aplicativos

    // index
    Route::get('/apps', 'AplicativoController@index')->name('apps.index');

    //store(insert data)
    Route::post('/apps','AplicativoController@store')->name('apps.store');

    //edit
    Route::get('/apps/{aplicativo}/edit','AplicativoController@edit')->name('apps.edit');

    //put
    Route::put('/apps/{aplicativo}','AplicativoController@update')->name('apps.update');



    //* Rutas Áreas de la fundación

    // index
    Route::get('/deptos-fundacion', 'AreaController@index')->name('deptos.index');

    //store(insert data)
    Route::post('/deptos-fundacion','AreaController@store')->name('deptos.store');

    //edit
    Route::get('/deptos-fundacion/{depto}/edit','AreaController@edit')->name('deptos.edit');

    //update
    Route::put('/deptos-fundacion/{depto}','AreaController@update')->name('deptos.update');
 
    
    
    //* Rutas Áreas de la fundación

    // index
    Route::get('/roles-fundacion', 'RolController@index')->name('roles.index');

    //store(insert data)
    Route::post('/roles-fundacion','RolController@store')->name('roles.store');

    //edit
    Route::get('/roles-fundacion/{rol}/edit','RolController@edit')->name('roles.edit');

    //update
    Route::put('/roles-fundacion/{rol}','RolController@update')->name('roles.update');


    //* peromisos roles
     // index
     Route::get('/permisos-rol', 'PermisoAccionController@index')->name('permisos.index');
    
     //store(insert data)    
     Route::post('/permisos-rol','PermisoAccionController@store')->name('permisos.store');
