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
    return redirect()->route('login');
});

Route::resource('/eleicao', 'VoterController');
Route::get('/eleicao', 'VoterController@create')->name('eleitor');

// Route::get('/eleicao', function () {
//     return view('voting.form');
// });


Route::group(['middleware' =>  ['auth']],function() {
    Route::resource('/chapas', 'CandidateController');
    Route::delete('/confirm-delete', 'CandidatesController@delete')->name('confirmacao');
});

Auth::routes(['register' => false]);
Route::get('/home', 'CandidateController@index')->name('home');
