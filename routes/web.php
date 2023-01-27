<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchController;
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
    // return view('welcome')->name('welcome');
});
Route::controller(ContactController::class)->group(function(){
    Route::get('/contact','index')->name('contact.index');
    Route::get('/create','create')->name('contact.create');
    Route::get('/edit/{id}','edit')->name('contact.edit');
});




// instant search
Route::get('/search',function(){
return view('search.index');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
