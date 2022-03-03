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

Route::get('/home', 'homeController@redirect');

Route::get('/viewpcandidate', "homecontroller@viewpcandidate");
Route::post('/uploadpresident', "homecontroller@uploadpresident");
Route::get('/showpresident', "homecontroller@viewpcandidates");
Route::get('/Update_president/{id}', "homecontroller@update_president");
Route::post('/edit_president/{id}', "homecontroller@Edit_President");
Route::get('/delete_president/{id}', 'HomeController@Delete_President');
Route::post('/uploadvoter', "homecontroller@uploadvoter");

//=====================Voters=============//
Route::get('/voters', 'HomeController@voters');
Route::get('/update_voters/{id}', 'HomeController@update_voters');
Route::post('/edit_voter/{id}', 'HomeController@edit_voters');
Route::get('/delete_voter/{id}', 'HomeController@delete_voters');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
