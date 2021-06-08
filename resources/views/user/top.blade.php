@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="mb-3">トップ</div>
            <ul>
                <li><a href='{{ route("item.list")}}'>商品一覧</a></li>
                <li><a href='{{ route("item.basket")}}'>購入履歴</a></li>
                <li>パスワードを変更する</li>
            </ul>
        </div>
        <div class="col">
            <div id="example"></div>
        </div>
    </div>
</div>
@endsection