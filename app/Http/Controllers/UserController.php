<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        return view('pages.users');
    }

    public function customerShow()
    {
        return view('pages.customer');
    }

    public function affiliateShow()
    {
        return view('pages.affiliate');
    }
}