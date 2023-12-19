<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\SignController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContentCourseController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BracketController;
use App\Http\Controllers\TransactionController;
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

Route::get('/', [SignController::class, 'index'])->name('/');

Route::get('login', [SignController::class, 'login'])->name('login');
Route::post('actionLogin', [SignController::class, 'actionLogin'])->name('actionLogin');

Route::get('signUp', [SignController::class, 'signUp'])->name('signUp');
Route::post('signup/action', [SignController::class, 'actionSignup'])->name('actionSignup');
Route::get('signup/verify/{verify_key}', [SignController::class, 'verify'])->name('verify');


Route::middleware(['auth'])->group(function () {
    Route::get('logout', [SignController::class, 'actionLogout'])->name('logout');
    Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::post('edit_profile', [UserController::class, 'update'])->name('edit_profile');

    Route::get('courses', [CourseController::class, 'index'])->name('courses');
    Route::get('courses/search', [CourseController::class, 'search'])->name('search');
    Route::get('courses/{id}', [CourseController::class, 'show'])->name('show');
    Route::get('courses/filter/{id}', [CourseController::class, 'filter'])->name('filter');

    Route::get('contentCourse/{id_course}/{id_content}', [ContentCourseController::class, 'show'])->name('contentCourse');
    Route::post('addQuestion/{id_course}/{id_content}', [QuestionController::class, 'store'])->name('addQuestion');
    Route::post('reply/{id_course}/{id_content}/{id_parent}', [QuestionController::class, 'reply'])->name('reply');

    Route::get('cartPage', [BracketController::class, 'index'])->name('cartPage');
    Route::get('addItemToCart/{id_course}', [BracketController::class, 'store'])->name('addItemToCart');
    Route::get('deleteCartItem/{id}', [BracketController::class, 'destroy'])->name('deleteCartItem');

    Route::get('checkoutPage', [TransactionController::class, 'index'])->name('checkoutPage');
    Route::post('checkout', [TransactionController::class, 'store'])->name('checkout');

});

Route::middleware(['auth:admin'])->group(function () {
    Route::get('admin/dashboard', [UserController::class, 'adminDashboard'])->name('adminDashboard');
    Route::get('logoutAdmin', [SignController::class, 'actionLogoutAdmin'])->name('logoutAdmin');
});
