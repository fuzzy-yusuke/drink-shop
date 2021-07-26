@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="mb-3">トップ</div>
            <ul>
                <li><a href='{{ route("item.index")}}'>商品一覧</a></li>
                <li><a href='{{ route("item.new")}}'>商品追加</a></li>
            </ul>
        </div>
        <div class="col">
            <div id="example"></div>
        </div>
    </div>
</div>
@endsection