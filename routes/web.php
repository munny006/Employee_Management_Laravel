<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/admin','AdminController@index');
Route::get('/admin/login','AdminController@login');
Route::post('/admin/login','AdminController@submit_login');
Route::get('/admin/logout','AdminController@logout');


//department

Route::get('depart/{id}/delete',[App\Http\Controllers\DepartmentController::class,'destroy']);
Route::resource('depart',DepartmentController::class);