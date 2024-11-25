<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
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

    public function adminPanel(){
        $setting = Setting::orderBy('id','desc')->first();
        return view('admin.home', compact('setting'));
    }

    public function saveSetting(Request $request){
        $home_bg = $request->input('home_background_image');
        $title = $request->input('title');
        $school_visited = $request->input('school_visited');
        $communities_visited = $request->input('communities_visited');
        $number_of_members = $request->input('number_of_members');
        $aboutus_background_image = $request->input('aboutus_background_image');
        $location = $request->input('location');
        $phone_number = $request->input('phone_number');
        $email_address = $request->input('email_address');
        $why_trust_us = $request->input('why_trust_us');

        $setting = Setting::orderBy('id','desc')->first();

        $setting->home_background_image = $home_bg;
        $setting->title = $title;
        $setting->school_visited = $school_visited;
        $setting->communities_visited = $communities_visited;
        $setting->number_of_members = $number_of_members;
        $setting->aboutus_background_image = $aboutus_background_image;
        $setting->location =$location;
        $setting->phone_number = $phone_number;
        $setting->email_address = $email_address;
        $setting->why_trust_us = $why_trust_us;

        $setting->save();
        return redirect()->route('adminPanel');
    }
}
