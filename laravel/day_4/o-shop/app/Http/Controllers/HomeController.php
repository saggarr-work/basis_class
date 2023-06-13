<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $companyInfo = Company::getAll();

        return view('frontend.home', [
            "companyInfos" => $companyInfo
        ]);
    }
}
