<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
    	return view('welcome');
    }
    public function about(){
    	return view('about');
    }
    public function stats(){
    	return view('stats');
    }
    public function blog(){
    	return view('blog');
    }
    public function contact(){
    	return view('contact');
    }
    public function single(){
    	return view('single');
    }

}
