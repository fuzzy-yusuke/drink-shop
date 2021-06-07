<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index()
    {
    //認証されているユーザー情報の取得
    $user=Auth::user();
    
    //トップ画面
    if($user->role='一般社員'){
        return view('user.top');
    }else{
        return view('admin.top');
    }
}
}
