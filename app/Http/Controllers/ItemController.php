<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\User;
use \InterventionImage;

class ItemController extends Controller
{
    //商品一覧に関するコントローラ
    public function index(Request $request)
    {
        //itemテーブルに格納されているデータを一覧表示する
        $items = Item::all();
        /*InterventionImage::make($items->picture)
        ->resize(300,300,function($constraint){
            $constraint->aspectRatio();
        })
        ->save(picture('/picture/' . $picture));*/
        return view ('index',['items'=>$items]);
    }

    public function show($id)
    {
        $item=Item::find($id);
        //dd($item);
        
        return view ('show',['item'=>$item]);
    }
    
}
