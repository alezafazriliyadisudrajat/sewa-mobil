<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('tampilan.home');
    }

    public function contact()
    {
        return view('tampilan.contact');
    }

    public function detail()
    {
        return view('tampilan.detail');
    }
    
   
}
