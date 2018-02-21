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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('emolumento/pdf',['uses'=>'pdfController@pdf','as'=>'emolumento.pdf']);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource ('emolumento','emolumentoController');

Route::resource ('financas','financasController');

Route::get('pdf/ver',[
	'uses'=>'pdfController@show',
	'as'=>'pdf.ver'
]);



