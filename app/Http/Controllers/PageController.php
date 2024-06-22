<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //controller class

    public function ShowUserHome(){
        return view('welcome');
    }
    public function ShowUserAbout(){
        return view('about');
    }
    public function ShowUserPost(){
        return view('post');
    }
    }


