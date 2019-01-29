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

Route::get('/home', 'HomeController@index')->name('home');


Route::get('viewInfo/{id}',function($id){
    $user = Auth::user()::find($id);
    return view('users.userInfo',['user' => $user]);
});

Route::get('editInfo/{id}',function($id){
    $user = Auth::user()::find($id);
    return view('users.editInfo',['user' => $user]);
});

Route::get('addResumeInfo/{id}', function ($id) {
    $user = Auth::user()::find($id);
    return view('users.addResumeInfo', ['user' => $user]);
});

Route::get('updateResumeInfo/{id}',function($id){
    $resume = Auth::user()::find($id)->resumes;
    return view('users.updateResumeInfo',['resume' => $resume]);
});

Route::post('editInfo/{id}','HomeController@updateUser');

Route::post('addResumeInfo/{id}','HomeController@store');

Route::post('updateResumeInfo/{id}','HomeController@updateResume');
