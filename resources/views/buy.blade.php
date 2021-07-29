@extends('layouts.app')
@section('content')
<div class="container">
    @if($request<$item->price)
    <p class="error">金額が足りません</p>
    @else
    <p>お買い上げありがとうございます。</p>
    <p>おつり：{{$request - $item->price}}円</p>
</div>
@endsection