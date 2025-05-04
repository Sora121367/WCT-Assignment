<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
        return view('pages.home');
    }
    public function getAbout(){
        return view('pages.about');
    }
    public function getPost(){
        return view('pages.post');
    }
    public function getContact(){
        return view('pages.contact');
    }
    public function getAdmin(){
        return view('pages.admin');
    }
}
