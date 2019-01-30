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
use Auth;
use App\Resume;

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

Route::get('viewInfo/{id}',function(){
    $user = Auth::user();
    return view('users.userInfo',['user' => $user]);
});

Route::get('viewResumeInfo/{id}',function(){
    $user = Auth::user();
    $resume = $user->resumes;
    return view('users.userResumeInfo',['user'=>$user,'resume'=>$resume]);
});

Route::get('editInfo/{id}',function(){
    $user = Auth::user();
    return view('users.editInfo',['user' => $user]);
});

Route::get('addResumeInfo/{id}', function () {
    $user = Auth::user();
    return view('users.addResumeInfo', ['user' => $user]);
});

Route::get('updateResumeInfo/{id}',function(){
    $user = Auth::user();
    $resume = $user->resumes;
    return view('users.updateResumeInfo',['resume' => $resume, 'user' => $user]);
});

Route::post('editInfo/{id}','HomeController@updateUser');

Route::post('addResumeInfo/{id}','HomeController@store');

Route::post('updateResumeInfo/{id}','HomeController@updateResume');

Route::get('styleSwitcher/{id}',function(){
    $user = Auth::user();
    $resume = $user->resumes;
    return view('users.styleSwitcher', ['resume' => $resume, 'user' => $user]);
});
