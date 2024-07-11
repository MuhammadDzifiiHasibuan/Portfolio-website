<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class PortoController extends Controller
{
    public function porto1()
    {
        return view('portfolio1');
    }
    public function porto2()
    {
        return view('portfolio2');
    }
    public function porto3()
    {
        return view('portfolio3');
    }

    public function home()
    {
        return view('index');
    }
}
