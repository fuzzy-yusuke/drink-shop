<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //一般ユーザーのコントローラ
    public function top(){
        return view('user.top');
    }
    
}
