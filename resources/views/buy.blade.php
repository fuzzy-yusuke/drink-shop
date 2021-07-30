@extends('layouts.app')
@section('content')
<div class="container">
    @if($payment < $item->price)
    <p class="error">金額が足りません</p>
    @else
    <p>お買い上げありがとうございます。</p>
    <p>おつり：{{$payment - $item->price}}円</p>
    @endif
    <a class="text-center" href="{{route('item.index')}}">一覧に戻る</a>
</div>


@endsection