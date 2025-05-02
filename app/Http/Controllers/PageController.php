<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function admin(){
        return view("admin.admin");
    }
    public function home(){
        return view('home');
    }
    public function about(){
        return view("about");
    }
    public function projectsPage(){
        return view("pages.projectsPage.projects");
    }
    public function certificatePage(){
        return view("pages.certificates.certificates");
    }
    public function contactMe(){
        return view('pages.contactPage.contactFORM');
    }
    public function Blogs(){
        return view("pages.blogs.blogs");
    }
}

