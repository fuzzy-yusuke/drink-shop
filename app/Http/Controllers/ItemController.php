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
        $makerId = $request->input('makerId');
        $query = Item::query();

        //企業名が選択された場合、itemテーブルから一致する商品を$queryに代入
        if (isset($makerId)) {
            $query->where('maker_id', $makerId);
        }
        //$queryをmakerIdの昇順に並び替えて$itemsに代入
        $items = $query->orderBy('maker_id', 'asc')->Paginate(10);

        //makerテーブルからgetMaker()関数でmaker_nameとidを取得
        $maker = new Maker;
        $makers = $maker->getMaker();
        //itemテーブルに格納されているデータを一覧表示する
        //$items = Item::Paginate(10);
        //$makers=Item::distinct()->select('maker')->get();
        return view('index', ['items' => $items, 'makers' => $makers, 'makerId' => $makerId]);
    }

    public function show(Request $request, $id)
    {
        $item = Item::find($id);
        //dd($item);

        return view('show', ['item' => $item]);
    }

    public function pay(Request $request, $id)
    {
        $item = Item::find($id);
        return view('pay', ['item' => $item]);
    }

    public function buy(Request $request, $id)
    {
        $item = Item::find($id);
        $payment = $request->get('payment');
        //dd($payment);
        return view('buy', ['item' => $item, 'payment' => $payment]);
    }

    public function new(Request $request)
    {
        $item = new Item;
        return view('new', ['item' => $item]);
    }

    public function store(Request $request,$id)
    {
        //バリデーションの適用
        $this->validate($request, Item::$rules);

        //画像のファイル名などを取得する
        if ($file = $request->picture) {
            //拡張子含めた、画像のファイル名を取得する
            $fileName = $file->getClientOriginalName();
            //public内のpictureフォルダを作成し、完全パスを返す
            $target_path = public_path('picture/');
            //画像をpublic/picture/に$fileNameという名前で挿入する
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }

        $item = new item();
        $maker = new maker();
        //登録画面で入力した情報をDBに格納させる
        $item->name = $request->name;
        //メーカー名をmakerテーブルに格納させる
        $maker->maker_name = $request->maker_name;
        $item->quantity = $request->quantity;
        $item->content = $request->content;
        $item->picture = $fileName;
        $item->save();

        return redirect()->route('item.complete', ['id' => $item->id]);
    }

    public function complete(Request $request, $id)
    {
        $item = Item::find($id);
        return view('complete', ['item' => $item]);
    }
}
