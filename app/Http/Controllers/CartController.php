<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cart;
use Illuminate\Support\Facades\Auth;

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
        $cart=new Cart;
        $item_id=$request->item_id;
        $cart->quantity=request('quantity');
        $message='買い物かごに追加しました';
        //同じ商品IDとユーザーIDが無いか確認
        $add_cart=Cart::firstOrCreate(['item_id'=>$item_id,'user_id'=>$user_id]);

        if($add_cart->wasRecentlyCreated){
            //既にある商品の個数に、リクエスト送信された個数を足してDBに格納
        }else{
            //DBに新規登録
            $message='買い物かごに登録済みです';
        }
        $carts=Cart::where('user_id',$user_id)->get();
        return view('mycart',['carts'=>$carts,'message'=>$message]);
    }
}
