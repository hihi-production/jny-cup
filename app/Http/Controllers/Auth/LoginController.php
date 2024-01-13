<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard-page';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        // name nya base on yang ada di table database
        return 'username';
    }

    public function index()
    {
        /**
         * Auth => untuk mengambil data authentication user dari database di table users
         * check => untuk mengecek apakah user dalam kondisi login atau tidak
         */
        if (Auth::check()) {
            // dalam kondisi login
            // ke halaman dashboard page
            return redirect()->to('/dashboard-page');
        }

        // dalam kondisi tidak login
        // ke halaman login
        return view('pages.auth.index');
    }
}
