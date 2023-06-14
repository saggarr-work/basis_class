<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $companyInfos = CompanyInfo::all();
        return $companyInfos;
    }
}
