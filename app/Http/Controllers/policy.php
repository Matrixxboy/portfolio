<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class policy extends Controller
{
    public function privcypolicy(){
        return view("partials.footerpages.pricacypolicy");
    }
    public function termsandcondition(){
        return view('partials.footerpages.termsandservuce.blade');
    }
    public function cookiepolicy(){
        return view("partials.footerpages.cookiepolicy");
    }
    public function gdpr(){
        return view("partials.footerpages.gdprINFO");
    }
    public function dnsmd(){
        return view("partials.footerpages.dnsmd");
    }
}

