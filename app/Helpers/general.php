<?php 
use App\Models\Setting;
use App\Models\Service;

    function setValue(){
        $setting = Setting::orderBy('id','desc')->first();
        return $setting;
    }

    function getServices(){
        $services = Service::orderBy('id','desc')->get();
        return $services;
    }

?>