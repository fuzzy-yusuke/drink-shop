@extends('layouts.app')
@section('content')
<div class="container">
    @push('css')
    <link href="{{ asset('css/pay.css')}}" rel="stylesheet">
    @endpush
    <h1 class="title">お支払い</h1>
    <hr class="line">

</div>

<div class="pay-text">
    <h2>金額入力</h2>
    <form action="{{route('item.buy',$item->id)}}" method="POST" class="'d-inline">
        @csrf
        <input name="item_id" type="hidden" value="{{$item -> id}}">
        <input type="submit" name="cart-in" class="btn btn-primary" value="購入を確定する">
    </form>
    <hr class="line">
    <p class="price">金額：{{$item->price}}円</p>
    <p class="payment">購入金額：
        <input type="text" name="payment" size="15">円
    </p>
</div>
<div class="item">
    <h2>ご購入内容</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>商品写真</th>
                <th>商品名</th>
                <th>メーカー</th>
                <th>価格(税込)</th>
            </tr>
        </thead>
        <tbody id="tbl">
            <tr>
                <td>{{$item->id}}</td>
                <td><img class="picture" src="{{asset('/picture/'.$item->picture)}}"></td>
                <td>{{$item->name}}</td>
                <td>{{$item->maker->maker_name}}</td>
                <td>{{$item->price}}円</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection