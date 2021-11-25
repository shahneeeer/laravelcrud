<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\student;


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
Route::get('/add-post',[student::class,"addpost"]);
Route::post('/add-post',[student::class,"Createpost"])->name('addpost');
Route::get('/show-post',[student::class,"show"])->name('showpost');
Route::get('/edit-post/{id}',[student::class,"edit"]);
Route::get('/delete-post/{id}',[student::class,"delete"]);
Route::post('/update-post',[student::class,"update"])->name('updatepost');
