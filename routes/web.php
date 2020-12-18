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
// Route::get('/welcome',function(){
//     return view('welcome');
// });
Route::get('/', function () {
    return view('Index/main');
});

Route::get('/registerPage','App\Http\Controllers\RegisterController@registerPage');
Route::get('/register/{whoRegister}','App\Http\Controllers\RegisterController@registerStep');
Route::post('/changePassword','App\Http\Controllers\RegisterController@changePassword');
Route::post('/forgotPassword','App\Http\Controllers\RegisterController@forgotPassword');
Route::post('/whoRegister','App\Http\Controllers\RegisterController@whoRegister');
Route::get('/registetVerify/{userMail}','App\Http\Controllers\RegisterController@registetVerify');


Route::get('/login', 'App\Http\Controllers\LoginController@show');
Route::post('/login', 'App\Http\Controllers\LoginController@login');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout');
Route::get('/checkLogin', 'App\Http\Controllers\LoginController@checkLogin');


Route::get('/studentText', 'App\Http\Controllers\MemberController@studentText');
Route::get('/studentArticleList', 'App\Http\Controllers\MemberController@studentArticleList');
Route::get('/checkArticle', 'App\Http\Controllers\MemberController@checkArticle');
Route::post('/updateComments', 'App\Http\Controllers\MemberController@updateComments');
Route::post('/articleCreate', 'App\Http\Controllers\MemberController@articleCreate');
Route::get('/memberData', 'App\Http\Controllers\MemberController@memberData');
Route::post('/updateMember', 'App\Http\Controllers\MemberController@updateMember');


