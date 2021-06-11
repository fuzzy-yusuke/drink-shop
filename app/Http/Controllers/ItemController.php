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
        return view('index', ['items' => $items]);
    }

    public function show($id)
    {
        $item = Item::find($id);
        //dd($item);

        return view('show', ['item' => $item]);
    }

    public function addCart(Request $request)
    {
        //買い物かごに入れるデータをセッションで保存する
        $cartData = [
            'session_item_id' => $request->id,
            'session_quantity' => $request->quantity,
        ];

        //買い物かごに商品が無い場合
        //「cartData」という名前で$cartDataの中身を保存する
        if (!$request->session()->has('cartData')) {
            $request->session()->push('cartData', $cartData);
        } else {
            //カートの中に商品が既にある場合
            //既にある商品の情報を取得する
            $sessionCartData = $request->session()->get('cartData');

            $isSameItemId=false;
            foreach($sessionCartData as $index=>$sessionData){
                //カート内の商品と追加される商品のIDが同一である場合
                if($sessionData['session_items_id']===$cartData['session_items_id']){
                    $isSameItemId=true;
                    $quantity=$sessionData['session_quantity']+$cartData['session_quantity']; //IDが同じ商品の個数を合算させる
                    $request->session()->put('cartData.' . $index . '.session_quantity',$quantity); //合算させた個数を上書きする
                    break;
                }
            }

            //既にある商品と追加される商品のIDが違う場合
            if($isSameItemId===false){
                $request->session()->push('cartData',$cartData);
            }
        }

        //POST送信された情報をsession保存する
        $request->session()->put('user_id',($request->user_id));
        return redirect()->route('item.cart');

    }
}
