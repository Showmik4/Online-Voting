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



Route::get('/home', 'homeController@redirect');
Route::get('/', 'homeController@index');

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

Route::get('/give_status/{id}', 'userhomecontroller@give_status');

//=====================User=================//
Route::get('/profile', 'userhomeController@ShowUser');
Route::get('/get_home', 'userhomeController@Get_Home');




//====================Ballot===================//
Route::get('/get_ballot', 'userhomeController@Get_Ballot');
Route::post('/addvote', 'userhomeController@Add_Vote');



//=======================Position===================//

Route::get('/get_position', 'HomeController@Get_Position');
Route::post('/upload_position', 'HomeController@Upload_Position');


//=========================Position==============//
Route::get('/get_candidate', 'HomeController@Get_Candidate');
Route::get('/upload_candidate', 'HomeController@Upload_Candidate');


//===================Party=========================//
Route::get('/get_party', 'HomeController@Get_Party');
Route::post('/upload_party', 'HomeController@Upload_Party');
Route::get('/update_party/{id}', 'HomeController@update_party');
Route::post('/edit_party/{id}', 'HomeController@edit_party');
Route::get('/delete_party/{id}', 'HomeController@delete_party');


Route::get('/view_party', 'CandidateController@View_Party');//View from candidates

//=================Application======================//
Route::get('/get_application', 'HomeController@Get_Application');
Route::get('/all_application', 'HomeController@All_Application');
Route::get('/approve_application/{id}', 'HomeController@approve_application');
Route::get('/cancelled_application/{id}', 'HomeController@cancelled_application');

//=====================Candidate=========================//
Route::get('/applicants', 'HomeController@applicants');
Route::post('/uploadapplicants', 'HomeController@uploadapplicants');
Route::get('/update_applicants/{id}', 'HomeController@update_applicants');
Route::post('/edit_applicants/{id}', 'HomeController@edit_applicants');
Route::get('/delete_applicants/{id}', 'HomeController@delete_applicants');
Route::get('/view_position', 'CandidateController@View_Position');
Route::get('/apply', 'CandidateController@Apply');
Route::post('/uploadapplication', 'CandidateController@uploadapplication');







Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
