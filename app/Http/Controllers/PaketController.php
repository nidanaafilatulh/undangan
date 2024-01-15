<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function show()
    {
        return view('pages.paket');
    }

}