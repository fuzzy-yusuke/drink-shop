<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cart;

class CartController extends Controller
{
    //買い物かごを扱う
    public function mycart(){
        $carts=Cart::all();
        return view('mycart',['carts' => $carts]);
    }

    public function addCart(Request $request){
        $user_id=Auth::id();
        //POST送信で送られた商品データを取得
        $item_id=$request->item_id;
        //同じ商品IDとユーザーIDが無いか確認
        $add_cart=Cart::firstOrCreate(['item_id'=>$item_id,'user_id'=>$user_id]);

        if($add_cart->wasRecentlyCreated){
            $message='買い物かごに追加しました';
        }else{
            $message='買い物かごに登録済みです';
        }
        $carts=Cart::where('user_id',$user_id)->get();
        return view('mycart',['carts'=>$carts,'message'=>$message]);
    }
}
