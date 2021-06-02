<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //社長・役員用
    public function top(){
        return view('admin.top');
    }
}
