<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('layout.master');
    }
    public function index2()
    {
        return view('layout.dashboard1');
    }
}
