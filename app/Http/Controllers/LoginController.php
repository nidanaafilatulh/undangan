<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Password;

class LoginController extends Controller
{
    /**
     * Display login page.
     *
     * @return Renderable
     */
    public function show()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $userRole = auth()->user()->role;

            $request->session()->regenerate();

            switch ($userRole) {
                    case "admin":
                        return redirect()->intended('admin');
    
                        break;
                    case "user":
                        return redirect()->intended('user');
    
                        break;
                    case "affiliate":
                        return redirect()->intended('affiliate');
    
                        break;
                    // case "departemen":
                    //     return redirect()->intended('departemen');
    
                    //     break;
                    default:
                        redirect()->to('/');
                }
        }        

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
