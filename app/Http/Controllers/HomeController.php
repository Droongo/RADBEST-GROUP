<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /** GET / — formerly rad.html */
    public function index(): View
    {
        return view('pages.home');
    }
}
