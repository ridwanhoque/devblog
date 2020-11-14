<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlobalConfigController extends Controller
{
    public function index(){
        return view('admin.company.global_config');
    }
}
