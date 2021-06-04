@extends('layouts.app')
@section('content')
<div class="container">
    <p>詳細</p>
    <p><img src="{{asset('/storage/'.$item->picture)}}"></p>
    <p>{{$item->content}}</p>
    <p>{{$item->name}}</p>
    <p>{{$item->price}}</p>
</div>
@endsection