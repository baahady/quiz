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

Route::middleware('can:manage-quiz')->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/quizzes/create','QuizController@create');
    Route::post('/quizzes','QuizController@store');
    Route::get('/quizzes/{quiz}','QuizController@show');
    Route::delete('/quizzes/{quiz}','QuizController@destroy');

    Route::get('/quizzes/{quiz}/questions/create','QuestionController@create');
    Route::post('/quizzes/{quiz}/questions','QuestionController@store');
    Route::delete('/quizzes/{quiz}/questions/{question}','QuestionController@destroy');
});

Route::get('/takeparts/{quiz}-{slug}','TakepartController@show');
Route::post('/takeparts/{quiz}-{slug}','TakepartController@store');

//Route::resource('/admin/users','Admin\UserController',['except'=>['show','create','store']]);

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users','UserController',['except'=>['show','create','store']]);
});