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
    Route::get('/contentArticle/{id}', [ArticleController::class, 'showDataById'])->name('showArticleById');
    Route::get('/articlePage', [ArticleController::class, 'articlePage'])->name('articlePage');
    Route::get('/articlePage', [ArticleController::class, 'index'])->name('article');


});

Route::middleware(['auth:admin'])->group(function () {
    Route::get('adminPage/dashboardAdmin', [SignController::class, 'actionLogin'])->name('adminDashboard');
    Route::get('logoutAdmin', [SignController::class, 'actionLogoutAdmin'])->name('logoutAdmin');
    Route::get('adminPage/manageArticle', [UserController::class, 'manageArticle'])->name('adminManageArticle');
    Route::get('adminPage/courses/createArticle', [ArticleController::class, 'create'])->name('createArticle');
    Route::post('adminPage/courses/createArticle', [ArticleController::class, 'store'])->name('storeArticle');
    Route::put('adminPage/manageArticle/toggleStatus/{id}', [ArticleController::class, 'toggleStatus'])->name('toggleStatusArticle');
    Route::delete('adminPage/manageArticle/{id}', [ArticleController::class, 'destroy'])->name('destroyArticle');
    Route::get('adminPage/manageArticle/{id}/edit', [ArticleController::class, 'edit'])->name('editArticle');
    Route::put('adminPage/manageArticle/{id}', [ArticleController::class, 'update'])->name('updateArticle');
    Route::get('adminPage/manageArticle/formArticle/{mode}/{id?}', [ArticleController::class, 'formArticle'])->name('formArticle');

});
