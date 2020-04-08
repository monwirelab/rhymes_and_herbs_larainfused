<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }

    public function plants(){
        return view('plants');
    }

    public function poems(){
        return view('poems');
    }

    public function recipes(){
        return view('recipes');
    }

    public function about_me(){
        return view('about_me');
    }

}
