@extends('layouts.app')
@section('content')
<div class="container">
    <p>詳細</p>
    <!--@php dd($item); @endphp -->
    <p><img src="{{asset('/picture/'.$item -> picture)}}"></p>
    <p>{{$item -> name}}</p>
    <p>{{$item -> content}}</p>
    <p>{{$item -> price}}</p>
</div>
@endsection