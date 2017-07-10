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

Route::get('doctor/list','DoctorController@getlista'); 

Route::get('doctor/{id}','DoctorController@show'); 

Route::get('center/{id}','CenterController@show'); 
Route::get('district/hot','DistrictController@index'); 
Route::get('district/listall','DistrictController@listall'); 

Route::get('district/{id}','DistrictController@show')->middleware('auth');


Route::get('/about', function (){
echo "<h2> This is About Page</h2>";
});
Route::get('/contact', function (){
echo "<h2> This is Contact Page</h2>";
}); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
