<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() 
    {
       return view('home');    
    }
    public function header() 
    {
       return view('Layouts.app');         
    }
}
