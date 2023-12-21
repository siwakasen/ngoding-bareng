<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Course;
use App\Models\Article;
use App\Mail\MailSend;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;



class SignController extends Controller
{
    public function index()
    {
        if (Auth::guard('admin')->check()) {
            $user = Auth::guard('admin')->user();
            // return response($user);
            return redirect('dashboardAdmin');
        }
        if (Auth::check()) {
            return redirect('dashboard');
        }

        $courses = Course::all();
        $articles = Article::all();
        $user = new User(['id' => null]);
        return view('guestPage.index', compact('courses', 'articles', 'user'));
    }
    public function signUp()
    {
        if (Auth::guard('admin')->check()) {
            return redirect('admin/dashboard');
        }
        if (Auth::check()) {
            return redirect('dashboard');
        }
        $user = new User(['id' => null]);
        return view('guestPage.signUpPage', compact('user'));
    }
    public function login()
    {
        if (Auth::guard('admin')->check()) {
            return redirect('dashboardAdmin');
        }
        if (Auth::check()) {
            return redirect('dashboard');
        }
        $user = new User(['id' => null]);
        return view('guestPage.loginPage', compact('user'));
    }
    public function actionSignup(Request $request)
    {
        $data = $request->all();
        $validate = Validator::make($data, [
            'name' => 'required|max:60',
            'username' => 'required|unique:users,username',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required|min:8',
            'retypePassword' => 'required| same:password',
        ]);
        if ($validate->fails()) {
            return redirect('signUp')->withErrors($validate)->withInput();
        }

        $str = Str::random(100);
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'verify_key' => $str,
            'active' => 0,
        ]);
        $details = [
            'username' => $request->username,
            'website' => 'Ngoding Bareng',
            'datetime' => date('Y-m-d H:i:s'),
            'url' => request()->getHttpHost() . '/signup/verify/' . $str
        ];
        Mail::to($request->email)->send(new MailSend($details));
        Session::flash('message', 'A verification link has been sent to your email. Please check your email to activate your account.');
        return redirect('signUp');
    }

    public function verify($verify_key)
    {
        $keyCheck = User::select('verify_key')
            ->where('verify_key', $verify_key)
            ->exists();
        if ($keyCheck) {
            $user = User::where('verify_key', $verify_key)
                ->update([
                    'active' => 1,
                    'email_verified_at' => date('Y-m-d H:i:s'),
                ]);
            Session::flash('message', 'Verification success. Your account is active.');
            return redirect('login');
        } else {
            Session::flash('error', 'Verification failed. Keys doesn\'t valid.');
            return redirect('login');
        }
    }


    public function actionLogin(Request $request)
    {
        $credentials = $request->only('username', 'password');
        $remember = $request->has('remember');
        if (Auth::attempt($credentials, $remember)) { //login user
            $user = Auth::user();
            if ($user->active) {
                $userdb = User::find(Auth::user()->id);
                $userdb->last_login = date('Y-m-d H:i:s');
                if(!$remember){
                    $userdb->remember_token = null;
                }
                $userdb->save();
                return redirect('dashboard')->with('success', 'Login success');
            } else {
                Auth::logout();
                Session::flash('error', 'Your account is not active. Please check your email.');
                return redirect('login');
            }
        }
        if (Auth::guard('admin')->attempt($credentials)) { //login admin
            return redirect('dashboardAdmin')->with('success', 'Login success');
        }
        Session::flash('error', 'Username or password might be wrong.');
        return redirect('login');
    }
    public function actionLogout()
    {
        $userdb = User::find(Auth::user()->id);
        $userdb->last_logout = date('Y-m-d H:i:s');
        $userdb->save();
        Auth::logout();
        if($userdb->remember_token){
        return redirect('login')->withInput(['username' => $userdb->username, 'password'=> $userdb, 'remember' => 'on']);
            
        }
        return redirect('login');
    }

    public function actionLogoutAdmin()
    {
        Auth::guard('admin')->logout();
        return redirect('login');
    }
}
