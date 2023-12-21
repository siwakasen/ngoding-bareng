<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Models\Bracket;
use App\Models\Category;
use App\Models\Transaction;
use App\Models\Course;

class AdminController extends Controller
{
    public function index()
    {
        // Pengecekan apakah pengguna adalah admin
        if (!Auth::guard('admin')->check()) {
            abort(403, 'Unauthorized action.');
        }

        $users = User::all();
        $online_users = 0;
        foreach ($users as $user) {
            if ($user->last_login == null && $user->last_login != null) {
                $online_users++;
            } else if (
                strtotime($user->last_login) > strtotime($user->last_logout)
            ) {
                $online_users++;
            }
        }
        $logged_users = User::whereNotNull('email_verified_at')->count();
        return view('adminPage.dashboardAdmin', compact('users', 'online_users', 'logged_users'));
    }

    //management article
    public function manageArticle()
    {
        // Pengecekan apakah pengguna adalah admin
        if (!Auth::guard('admin')->check()) {
            abort(403, 'Unauthorized action.');
        }

        $article = Article::all();
        return view('adminPage.manageArticle', compact('article'));
    }

    //management course
    public function manageCourse()
    {
        // Pengecekan apakah pengguna adalah admin
        if (!Auth::guard('admin')->check()) {
            abort(403, 'Unauthorized action.');
        }
        $courses = Course::all();
        foreach ($courses as $course) {
            $course->count = $transactions = Transaction::whereHas('bracket', function ($query) {
                $query->where('status', 'paid');
            })->where('id_course',$course->id)->count();

            $course->revenue=$course->count*$course->price;
        }
        $count_course=$courses->count();
        $categories = Category::all();
        $total_revenue = Bracket::all()->where('status', 'paid')->sum('total_price');
        return view('adminPage.courses.manageCourse', compact('courses', 'total_revenue', 'categories','count_course'));
    }

    public function bracketDetails(){
        if (!Auth::guard('admin')->check()) {
            abort(403, 'Unauthorized action.');
        }
        $trans=1;
        $brackets = Bracket::all();

        return view('adminPage.transactions', compact('trans','brackets'));
    }
    public function transactionDetails(){
        if (!Auth::guard('admin')->check()) {
            abort(403, 'Unauthorized action.');
        }
        $trans=0;
        $transaction = Transaction::all();

        return view('adminPage.transactions', compact('trans','transaction'));
    }

}
