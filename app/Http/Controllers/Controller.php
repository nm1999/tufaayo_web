<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Blog;
use App\Models\Service;

class Controller
{
    public function index(){
        return view('pages.home');
    }

    public function vueIndex(){
        $blogs = Blog::orderBy('id','desc')->get();
        $settings = Setting::orderBy('id','desc')->first();
        return view('vue',compact('blogs','settings'));
    }

    public function aboutus(){
        return view('pages.aboutus');
    }

    public function contactus(){
        return view('pages.contactus');
    }
    
    public function blogPost(){
        $blogs = Blog::orderBy('id','desc')->get();
        return view('pages.blog',compact('blogs'));
    }
    
    public function blogs(){
        $blogs = Blog::orderBy('id','desc')->get();
        return view('pages.blog',compact('blogs'));
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
        $home_bg = $request->file('home_background_image');
        $title = $request->input('title');
        $school_visited = $request->input('school_visited');
        $communities_visited = $request->input('communities_visited');
        $number_of_members = $request->input('number_of_members');
        $aboutus_background_image = $request->file('aboutus_background_image');
        $location = $request->input('location');
        $phone_number = $request->input('phone_number');
        $email_address = $request->input('email_address');
        $why_trust_us = $request->input('why_trust_us');

        //saving our images
        $home_bg_name = uniqid() . '.' .$home_bg->getClientOriginalExtension();
        $aboutus_background_image_name = uniqid() . '.' .$aboutus_background_image->getClientOriginalExtension();
        $home_bg->move(public_path('settings'), $home_bg_name);
        $aboutus_background_image->move(public_path('settings'), $aboutus_background_image_name);

        $setting = Setting::orderBy('id','desc')->first();

        $setting->home_background_image = $home_bg_name;
        $setting->title = $title;
        $setting->school_visited = $school_visited;
        $setting->communities_visited = $communities_visited;
        $setting->number_of_members = $number_of_members;
        $setting->aboutus_background_image = $aboutus_background_image_name;
        $setting->location =$location;
        $setting->phone_number = $phone_number;
        $setting->email_address = $email_address;
        $setting->why_trust_us = $why_trust_us;

        $setting->save();
        return redirect()->route('adminPanel')->with('message','Settings Updated successfully');
    }

    public function saveBlog(Request $req){
        $title = $req->input('title');
        $desc = $req->input('description');
        $file = $req->file('blog_image');

        $filename = uniqid() . '.' .$file->getClientOriginalExtension();
        $file->move(public_path('blogs'), $filename);

        $blog = Blog::create([
            "title"=>$title,
            "description"=>$desc,
            "blog_image"=>$filename
        ]);

        return redirect()->route('adminPanel')->with('message','Blog added successfully');
    }
   
    public function saveService(Request $req){
        $title = $req->input('title');
        $desc = $req->input('description');
        $file = $req->file('image');

        $filename = uniqid() . '.' .$file->getClientOriginalExtension();
        $file->move(public_path('services'), $filename);

        $blog = Service::create([
            "title"=>$title,
            "description"=>$desc,
            "image"=>$filename
        ]);

        return redirect()->route('adminPanel')->with('message','Service added successfully');
    }


}
