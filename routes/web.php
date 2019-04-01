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

Route::get('Formulario', function () {
    return view('Formulario');
});

Route::get('Examen_cervical', function(){
    return view('Examen_cervical');
});

Route::get('paciente', function(){
    return view('Paciente');
});


