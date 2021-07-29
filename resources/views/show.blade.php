@extends('layouts.app')
@section('content')
<div class="container">
    @push('css')
    <link href="{{ asset('css/show.css')}}" rel="stylesheet">
    @endpush
    <h1>商品詳細</h1>
    <p><img src="{{asset('/picture/'.$item->picture)}}"></p>
    <p class="name">{{$item->name}}</p>
    <p class="content">{{$item->content}}</p>
    <p class="price">{{$item->price}}円</p>
</div>
<!-- 画面遷移時にPOST送信する -->
<form action="{{route('item.pay',['id'=>$item -> id])}}" method="GET" class="'d-inline">
    @csrf
    <div class="form-row justify-content-center">
        <input name="item_id" type="hidden" >
        <input type="submit" name="cart-in" class="btn btn-primary" value="商品を購入する">
    </div>
</form>
@endsection