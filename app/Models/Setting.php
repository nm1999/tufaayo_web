<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = "settings";

    protected $fillable = [
        "home_background_image",
        "title",
        "school_visited",
        "communities_visited",
        "number_of_members",
        "aboutus_background_image",
        "location",
        "phone_number",
        "email_address",
        "why_trust_us"
    ];
}
