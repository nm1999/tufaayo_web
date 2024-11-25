<?php 
use App\Models\Setting;

    function setValue(){
        $setting = Setting::orderBy('id','desc')->first();
        return $setting;
    }

?>