<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Item;
use App\Maker;
use \InterventionImage;

class ItemController extends Controller
{
    //商品一覧に関するコントローラ
    public function index(Request $request)
    {
        //$maker=new Maker;
        //$makers=$maker->getMaker();
        $makerId=$request->input('makerId');
        $query=Item::query();
        
        //企業名が選択された場合、itemテーブルから一致する商品を$queryに代入
        if(isset($makerId)){
            $query->where('maker_id',$makerId);
        }
        //$queryをmakerIdの昇順に並び替えて$itemsに代入
        $items=$query->orderBy('maker_id','asc')->Paginate(10);

        //makerテーブルからgetMaker()関数でmaker_nameとidを取得
        $maker=new Maker;
        $makers=$maker->getMaker();
        //itemテーブルに格納されているデータを一覧表示する
        //$items = Item::Paginate(10);
        //$makers=Item::distinct()->select('maker')->get();
        return view('index', ['items' => $items,'makers'=>$makers,'makerId'=>$makerId]);
    }

    public function show(Request $request, $id)
    {
        $item = Item::find($id);
        //dd($item);

        return view('show', ['item' => $item]);
    }

    public function pay(Request $request,$id){
        $item=Item::find($id);
        return view('pay',['item'=>$item]);
    }

    public function buy(Request $request,$id){
        $item=Item::find($id);
        return view('buy',['item'=>$item]);
    }
}
