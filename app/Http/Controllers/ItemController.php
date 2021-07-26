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
        if ($request->filled('keyword')) {
            $keyword = $request->input('keyword');
            $message = '「' . $keyword . '」で検索';
            $items = Item::where('name', 'like', '%' . $keyword . '%')->get();
            //データベースに格納されてあるデータの中で、入力されたキーワードが含まれているものを呼び出す。
        } else {
            //itemテーブルに格納されているデータを一覧表示する
            $items = Item::Paginate(10);
        }
        return view('index', ['items' => $items]);
    }

    public function show(Request $request, $id)
    {
        $item = Item::find($id);
        //dd($item);

        return view('show', ['item' => $item]);
    }
}
