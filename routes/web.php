<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\SignController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContentCourseController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BracketController;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnSelf;

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
Route::get('/', [SignController::class,'index'])->name('/');

Route::get('login',[SignController::class,'login'])->name('login');
Route::post('actionLogin',[SignController::class,'actionLogin'])->name('actionLogin');
Route::get('logout',[SignController::class,'actionLogout'])->name('logout')->middleware('auth');

Route::get('signUp', [SignController::class,'signUp'])->name('signUp');
Route::post('signup/action',[SignController::class,'actionSignup'])->name('actionSignup');
Route::get('signup/verify/{verify_key}',[SignController::class,'verify'])->name('verify');

Route::get('dashboard',[UserController::class,'index'])->name('dashboard')->middleware('auth');
Route::get('profile',[UserController::class,'profile'])->name('profile')->middleware('auth');
Route::post('edit_profile',[UserController::class,'update'])->name('edit_profile')->middleware('auth');

Route::get('courses',[CourseController::class,'index'])->name('courses')->middleware('auth');
Route::get('courses/search',[CourseController::class,'search'])->name('search')->middleware('auth');
Route::get('courses/{id}',[CourseController::class,'show'])->name('show')->middleware('auth');
Route::get('courses/filter/{id}',[CourseController::class,'filter'])->name('filter')->middleware('auth');
Route::get('contentCourse/{id_course}/{id_content}',[ContentCourseController::class,'show'])->name('contentCourse')->middleware('auth');

Route::post('addQuestion/{id_course}/{id_content}',[QuestionController::class,'store'])->name('addQuestion')->middleware('auth');
Route::post('reply/{id_course}/{id_content}/{id_parent}',[QuestionController::class,'reply'])->name('reply')->middleware('auth');

Route::get('cartPage',[BracketController::class,'index'])->name('cartPage')->middleware('auth');
Route::get('addItemToCart/{id_course}',[BracketController::class,'store'])->name('addItemToCart')->middleware('auth');

Route::middleware(['auth:admin'])->group(function () {
    //route admin taruh sini
    
});
