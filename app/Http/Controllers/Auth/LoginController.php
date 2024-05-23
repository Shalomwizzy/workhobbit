<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo()
{
    if (Auth::check()) {
        $role = Auth::user()->role;
        
        if ($role === 'manager') {
            return route('manager.dashboard');
        } elseif ($role === 'admin') {
            return route('admin/dashboard');
        } elseif ($role === 'salesperson') {
            return route('orders.index');
        }
    }

    return $this->redirectTo;
}

    public function login(Request $request)
    {
        $this->validateLogin($request);
    
        // Attempt to log in the user
        if ($this->attemptLogin($request)) {
            // Check if the user is suspended
            if (Auth::user()->status === 'suspended') {
                Auth::logout(); // Logout the suspended user
                return redirect()->route('login')->with('error', 'Your account has been suspended. Please contact us for assistance.');
            }
    
            return $this->sendLoginResponse($request);
        }
    
        // If the login attempt fails
        return $this->sendFailedLoginResponse($request);
    }
}

