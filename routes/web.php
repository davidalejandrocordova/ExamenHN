<?php

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

Route::get('examen_biopsia', 'PacientesController@Patologica')->name('examen_biopsia.nuevo');

Route::get('examen_cervical', 'PacientesController@Cervical')->name('examen_cervical.nuevo');

Route::get('/', function(){
    return view('Paciente');
});


