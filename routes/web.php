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

Route::get('/', 'PagesController@inicio')->name('inicio');;

Route::get('/empresas', 'PagesController@empresas')->name('empresas');

Route::get('/blog', 'PagesController@blog')->name('blog');

Route::get('/nosotros/{nombre?}','PagesController@nosotros')->name('nosotros');

Route::get('/notas', 'PagesController@notas')->name('notas');

Route::get('/notas/{id}', 'PagesController@detalle')->name('notas.detalle');

Route::get('notas/editar/{id}', 'PagesController@editar')->name('notas.editar');


Route::post('crear', 'PagesController@crear')->name('notas.crear');



Route::put('/notas/editar/{id}' , 'PagesController@update')->name('notas.update');