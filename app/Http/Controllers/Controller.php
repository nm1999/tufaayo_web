<?php

namespace App\Http\Controllers;
use App\Models\Setting;

class Controller
{
    public function index(){
        // $setting = Setting::all();
        // return response()->json(["res"=>$setting]);
        return view('pages.home');
    }

    public function aboutus(){
        return view('pages.aboutus');
    }

    public function contactus(){
        return view('pages.contactus');
    }
    
    public function blog(){
        return view('pages.blog');
    }
}
