<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public static $company = [
        "name"          => "O-Shop",
        "logo"          => [
                            "logo_1" => "image.jpg",
                            "logo_2" => "image2.jpg"
                        ],
        "mobile"        => "01306472108",
        "fb_link"       => "https://www.facebook.com",
        "address"       => "Shankar",
        "description"   => "best online shop"
    ];

    public static function getAll()
    {
        return self::$company;
    }
}
