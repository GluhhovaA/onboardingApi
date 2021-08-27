<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('welcome',
            ['greeting' => 'Hi, Interns!!! =) This is our new project! LET`S START TO CREATE!']
        );
    }
}
