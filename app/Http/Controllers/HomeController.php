<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // return a view or simple text for testing
        //return view('layouts.app'); // Make sure you have resources/views/home.blade.php
        // or for quick test: return 'Home Page';
        return view('welcome');
    }
}
