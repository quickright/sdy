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

Route::any('captcha-test', function()
    {
        if (Request::getMethod() == 'POST')
        {
            $rules = ['captcha' => 'required|captcha'];
            $validator = Validator::make(Input::all(), $rules);
            if ($validator->fails())
            {
                echo '<p style="color: #ff0000;">Incorrect!</p>';
            }
            else
            {
                echo '<p style="color: #00ff30;">Matched :)</p>';
            }
        }
    
        $form = '<form method="post" action="captcha-test">';
        $form .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
        $form .= '<p>' . captcha_img() . '</p>';
        $form .= '<p><input type="text" name="captcha"></p>';
        $form .= '<p><button type="submit" name="check">Check</button></p>';
        $form .= '</form>';
        return $form;
    });
