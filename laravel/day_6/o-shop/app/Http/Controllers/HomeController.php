<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // first() method sudhu database er ekta value e dibe 
        $companyInfos = CompanyInfo::first();

        return view('frontend.home',[
            'companyInfos' => $companyInfos
        ]);
    }
}
