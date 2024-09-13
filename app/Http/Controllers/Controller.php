<?php

namespace App\Http\Controllers;
use App\Models\Setting;

class Controller
{
    public function index(){
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

    public function data(){
        Setting::create([
            "key" => "title",
            "value" => "We improve Lifes in the Rural Communities"
        ]);
        $setting = Setting::all();
        return response()->json(["res"=>$setting]);
    }
}
