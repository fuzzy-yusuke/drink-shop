@extends('layouts.app')
@section('content')
<div class="container">
    <p>商品の登録が完了致しました。</p>
    <a class="text-center" href="{{route('item.index')}}">一覧に戻る</a>
</div>


@endsection