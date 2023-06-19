<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function show()
    {
        return view('partials.navbar');
    }
}

