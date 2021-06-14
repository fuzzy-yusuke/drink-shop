<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cart;

class CartController extends Controller
{
    //買い物かごを扱う
    public function index(){
        $carts=Cart::all();
        return view('index',['carts' => $carts]);
    }
}
