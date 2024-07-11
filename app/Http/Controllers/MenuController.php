<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function hero()
    {
        return view('index#hero');
    }
}
