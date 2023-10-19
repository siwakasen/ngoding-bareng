<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('guestPage/index');
});
Route::get('/dashboard', function () {
    return view('userPage/dashboardUser');
});
Route::get('/courses', function () {
    return view('userPage/courses/coursePage');
});
Route::get('/articles', function () {
    return view('userPage/articles/articlePage');
});
Route::get('/profile', function () {
    return view('userPage/profilePage');
});
Route::get('/login', function () {
    return view('guestPage/loginPage');
});
