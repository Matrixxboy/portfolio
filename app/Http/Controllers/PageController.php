<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view("home");
    }
    public function about(){
        return view("about");
    }
    public function projectsPage(){
        return view("Projects");
    }
    public function contactMe(){
        return view("Contact Me");
    }
    public function admin(){
        return view("Admin");
    }
}

