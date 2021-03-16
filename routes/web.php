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

Route::get('/index', function () {
    return view('index');
});

//HOME
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//INDEX
Route::post('index','App\Http\Controllers\IndexController@index')->name('index');



//MOTORES
Route::get('/motores', 'App\Http\Controllers\MotoresController@index')->name('motores.index');
Route::get('/motores/{id}/show', 'App\Http\Controllers\MotoresController@show')->name('motores.show');



//NISSAN
Route::get('/nissans', 'App\Http\Controllers\NissansController@index')->name('nissans.index');
Route::get('/nissans/{id}/show', 'App\Http\Controllers\NissansController@show')->name('nissans.show');
//Create
Route::get('/nissans/create', 'App\Http\Controllers\NissansController@create')->name('nissans.create');
Route::post('/nissans', 'App\Http\Controllers\NissansController@store')->name('nissans.store');



//BMW
Route::get('/bmws', 'App\Http\Controllers\BmwsController@index')->name('bmws.index');
Route::get('/bmws/{id}/show', 'App\Http\Controllers\BmwsController@show')->name('bmws.show');
//Create
Route::get('/bmws/create', 'App\Http\Controllers\BmwsController@create')->name('bmws.create');
Route::post('/bmws', 'App\Http\Controllers\BmwsController@store')->name('bmws.store');
//edit
Route::get('/bmws/{id}/edit','App\Http\Controllers\BmwsController@edit')->name('bmws.edit');
Route::post('/bmws', 'App\Http\Controllers\BmwsController@update')->name('bmws.update');



//HONDAS
Route::get('/hondas', 'App\Http\Controllers\HondasController@index')->name('hondas.index');
Route::get('/hondas/{id}/show', 'App\Http\Controllers\HondasController@show')->name('hondas.show');
//Create
Route::get('/hondas/create', 'App\Http\Controllers\HondasController@create')->name('hondas.create');
Route::post('/hondas', 'App\Http\Controllers\HondasController@store')->name('hondas.store');



//YELLOW SPEED RACING
Route::get('/yellows', 'App\Http\Controllers\YellowsController@index')->name('yellows.index');
Route::get('/yellows/{id}/show', 'App\Http\Controllers\YellowsController@show')->name('yellows.show');



//AP
Route::get('/aps', 'App\Http\Controllers\ApsController@index')->name('aps.index');
Route::get('/aps/{id}/show', 'App\Http\Controllers\ApsController@show')->name('aps.show');




//OMP
Route::get('/omps', 'App\Http\Controllers\OmpsController@index')->name('omps.index');
Route::get('/omps/{id}/show', 'App\Http\Controllers\OmpsController@show')->name('omps.show');
//Create
Route::get('/omps/create', 'App\Http\Controllers\OmpsController@create')->name('omps.create');
Route::post('/omps', 'App\Http\Controllers\OmpsController@store')->name('omps.store');




//SPARCO
Route::get('/sparcos', 'App\Http\Controllers\SparcosController@index')->name('sparcos.index');
Route::get('/sparcos/{id}/show', 'App\Http\Controllers\SparcosController@show')->name('sparcos.show');
//Create
Route::get('/sparcos/create', 'App\Http\Controllers\SparcosController@create')->name('sparcos.create');
Route::post('/sparcos', 'App\Http\Controllers\SparcosController@store')->name('sparcos.store');




//Bomps Bancos OMP
Route::get('/bomps', 'App\Http\Controllers\BompsController@index')->name('bomps.index');
Route::get('/bomps/{id}/show', 'App\Http\Controllers\BompsController@show')->name('bomps.show');
//Create
Route::get('/bomps/create', 'App\Http\Controllers\BompsController@create')->name('bomps.create');
Route::post('/bomps', 'App\Http\Controllers\BompsController@store')->name('bomps.store');

//produto
Route::get('/produtos', 'App\Http\Controllers\ProdutosController@index')->name('produtos.index');
Route::get('/produtos/{id}/show', 'App\Http\Controllers\ProdutosController@show')->name('produtos.show');
Route::get('/produtos/create', 'App\Http\Controllers\ProdutosController@create')->name('produtos.create');
Route::post('/produtos', 'App\Http\Controllers\ProdutosController@store')->name('produtos.store');