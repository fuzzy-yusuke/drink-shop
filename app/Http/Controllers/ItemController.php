<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\User;

class ItemController extends Controller
{
    //商品一覧に関するコントローラ
    public function index(Request $request)
    {
        //itemテーブルに格納されているデータを一覧表示する
        $items = Item::all();
        return view ('index',['items'=>$items]);
    }
    
}
