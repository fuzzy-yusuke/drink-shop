@extends('layouts.app')
@section('content')
<div class="container">
    <form method="POST" action="{{ route('item.store',['id'=>$item -> id])}}" enctype="multipart/form-data">
        @csrf
        <div class="col-sm-8 col-sm-offset-2">
            <div class="card" style="width: 1000px; height: 600px;">
                <div class="card-header">商品追加</div>
                <div class="card-body">
                    <th scope="col">商品名</th>
                    <td><input class="form-control" type="text" id="name" name="name" row=50></td>
                    <th scope="col">メーカー</th>
                    <select class="form-control" id="makers" name="makers">
                        <option value="">選択</option>
                        @foreach($makers as $maker)
                        <option value="{{$maker->id}}">{{$maker->maker_name}}</option>
                        @endforeach
                    </select>
                    @php
                    $maker_name=$maker->name;
                    @endphp
                    <th scope="col">商品ジャンル</th>
                    <td><input class="form-control" type="text" id="genre" name="genre" row=50></td>
                    <th scope="col">商品価格</th>
                    <td><input class="form-control" type="text" id="price" name="price" row=50></td>
                    <th scope="col">個数</th>
                    <select class="form-control" id="quantity" name="quantity">
                        <option>選択</option>
                        @for($i=1;$i<=10;$i++) <option value="{{$i}}">{{$i}}</option>
                            @endfor
                    </select>
                    <th scope="col">商品説明</th>
                    <input class="form-control" type="text" name="content" style="width: 960px; height: 100px;">
                    <th scope="col">画像</th>
                    <input type="file" name="picture">
                </div>
            </div>
            <input type="submit" class="btn btn-success" onclick="return confirm('この内容で登録しますか。')">
        </div>
    </form>
</div>

@endsection