<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        return view('pages.admin.users');
    }

    public function customerShow()
    {
        return view('pages.admin.customer');
    }

    public function affiliateShow()
    {
        return view('pages.admin.affiliate');
    }
}