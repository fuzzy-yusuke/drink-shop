@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="mb-3">トップ</div>
            <ul>
                <li><a href='{{ route("item.index")}}'>商品一覧</a></li>
                <li><a href='{{ route("item.cart")}}'>購入履歴</a></li>
                <li>パスワードを変更する</li>
                <li><a href="{{ route('register')}}">アカウント新規作成</a></li>
                <li>商品追加</li>
            </ul>
        </div>
        <div class="col">
            <div id="example"></div>
        </div>
    </div>
</div>
@endsection