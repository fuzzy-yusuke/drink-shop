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
<form action="{{route('item.pay')}}" method="POST" class="'d-inline">
    @csrf
    <div class="form-row justify-content-center">
        <input name="item_id" type="hidden" value="{{$item -> id}}">
        <input type="submit" name="cart-in" class="btn btn-primary" value="購入を確定する">
    </div>
    <a class="text-center" href="{{route('item.index')}}">一覧に戻る</a>
</form>
@endsection