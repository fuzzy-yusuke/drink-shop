@extends('layouts.app')
@section('content')
<div class="container">
    <h1>商品詳細</h1>
    <p><img src="{{asset('/picture/'.$item->picture)}}"></p>
    <p>{{$item->name}}</p>
    <p>{{$item->content}}</p>
    <p>{{$item->price}}円</p>
</div>
<!-- 画面遷移時にPOST送信する -->
<form method="POST" class="'d-inline">
    @csrf
    <div class="form-group">
        <select class="form-control" name="count">
            <option value="placeholder">個数を選択してください</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>
    <div class="form-row justify-content-center">
        <input name="item_id" type="hidden" value="{{$item -> id}}">
        <input type="submit" name="cart-in" class="btn btn-primary" value="買い物かごに入れる">
    </div>
    <a class="text-center" href="{{route('item.index')}}">一覧に戻る</a>
</form>
@endsection