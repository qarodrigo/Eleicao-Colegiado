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


Route::get('/home', 'VoterController@create')->name('home');

Route::get('/', function () {
    return redirect()->route('home');
});


Route::resource('/eleicao', 'VoterController');
Route::get('/eleicao', 'VoterController@create')->name('form');

Route::get('/eleitores', function(){
    return view('candidates.uploadFile');
});

Route::group(['middleware' =>  ['auth']],function() {
    Route::resource('/chapas', 'CandidateController');
    //Route::delete('/confirm-delete', 'CandidateController@delete')->name('confirmacao');
});


Auth::routes(['register' => false]);
Route::get('/logout',function(){
    return redirect()->route('login');
});

//upload file
Route::get('/eleitores', 'UploadFileController@getPageUpload');
Route::post('/eleitores', 'UploadFileController@fileImport')->name('upload');