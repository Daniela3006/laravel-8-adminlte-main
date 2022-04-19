<?php

use App\Http\Controllers\CountController;
use Illuminate\Support\Facades\Auth;
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

Route::get('items', function () {
    return view('items');
});

Route::get('page','CountController@index');

Route:: get('products','productController@main')->name('product.main');
Route:: get('products/create','productController@create')->name('create.main');
Route:: post('products','productController@store')->name('product.store');
Route:: get('products/{product}','productController@show')->name('product.show');
Route:: get('products/{product}/edit','productController@edit')->name('product.edit');
Route:: patch('products/{product}','productController@update')->name('product.update');
Route:: delete('products/{product}','productController@destroy')->name('product.delete');





Route:: get('about','AboutController@main')->name('about.main');

Route:: get('contacts','ContactsController@main')->name('contact.main');









Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
