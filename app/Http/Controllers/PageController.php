<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }
    public function img(){
//        return view('img');
    return 'img';
    }
    public function poem(){
//        return view('poem');
    return 'poem';
    }
}
