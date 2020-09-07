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

Auth::routes(['verify'=> true]);

Route::get('/home', 'HomeController@index')->name('home');

route::group(['middleware' => ['auth']], function() {

// **  Admin routes ** //
Route::prefix('/admin')->namespace('Admin')->group(function() { 	
Route::Resource('adminDashboard', 'AdminController')->middleware('verified');
Route::Resource('adminSpeciality', 'SpecialityController')->middleware('verified');
Route::Resource('adminRole', 'RoleController')->middleware('verified');

});

//  ** Doctor Route **  //
Route::prefix('/doctor')->namespace('Doctor')->group(function() {
Route::Resource('doctorDashboard', 'DoctorController')->middleware('verified');

});


});

