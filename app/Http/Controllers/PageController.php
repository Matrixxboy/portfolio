<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function admin(){
        return view("Admin");
    }
    public function home(){
        return view("home");
    }
    public function about(){
        return view("about");
    }
    public function projectsPage(){
        return view("Projects");
    }
    public function certificatePage(){
        return view("Certificate");
    }
    public function contactMe(){
        return view("Contact Me");
    }
    public function Blogs(){
        return view("Blogs");
    }
}

