<?php 
use App\Models\Setting;

    function getValue($key){
        $setting = Setting::where("key",$key)->first();
        if($setting){
            echo $setting->value;
        }else{
            Setting::create([
                "key"=>$key,
                "value"=> "set $key value"
            ]);
            echo null;
        }
    }
?>