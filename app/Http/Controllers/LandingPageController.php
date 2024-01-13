<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Password;

class LandingPageController extends Controller
{
    /**
     * Display login page.
     *
     * @return  \Illuminate\View\View
     */
    public function index()
    {
        return view('pages.landingPage');
    }
    
}
