<?php

#use Illuminate\Support\Facades\Route;

#Route::get('/', function () {
 #   return view('welcome');
#});




Route::view('/','home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');
//Colocar la ruta completa para la version 8 en adelante
#Route::get('servicios','App\Http\Controllers\ServiciosController@servicios')->name('servicios');
Route::get('servicios','App\Http\Controllers\ServiciosController@index')->name('servicios');
Route::view('contacto','contacto')->name('contacto');

