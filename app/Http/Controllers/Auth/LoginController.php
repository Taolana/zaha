<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:touriste')->except('logout');
        $this->middleware('guest:guide')->except('logout');
        $this->middleware('guest:moderateur')->except('logout');
    }

    /**
     * 
     * Show forms
     */
    public function showAdminLoginForm()
    {
        return view('back-office.bearer.login', ['url' => 'admin']);
    }

    public function showTouristeLoginForm()
    {
        return view('auth.login', ['url' => 'touriste']);
    }

    public function showGuideLoginForm()
    {
        return view('auth.login', ['url' => 'guide']);
    }

    public function showModerateurLoginForm()
    {
        return view('back-office.bearer.login', ['url' => 'moderateur']);
    }
    /**
     * 
     * Log users
     */

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(
            [
                'email' => $request->email, 
                'password' => $request->password,
                'is_admin' => true,
            ], 
            $request->get('remember'))) {

            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email', 'remember'));
    }


    public function touristeLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('touriste')->attempt(
            [
                'email' => $request->email, 
                'password' => $request->password,
                'is_touriste' => true,
            ], 
            $request->get('remember'))) {

            return redirect()->intended('/touriste');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function guideLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('guide')->attempt(
            [
                'email' => $request->email, 
                'password' => $request->password,
                'is_guide' => true,
            ], 
            $request->get('remember'))) {

            return redirect()->intended('/guide');
        }
        return back()->withInput($request->only('email', 'remember'));
    }


    public function moderateurLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('moderateur')->attempt(
            [
                'email' => $request->email, 
                'password' => $request->password,
                'is_moderator' => true,
            ], 
            $request->get('remember'))) {

            return redirect()->intended('/moderateur');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}
