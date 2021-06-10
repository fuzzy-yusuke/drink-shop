@extends('layouts.app')
@section('content')
<div class="container">
    <h1>詳細</h1>
    <p><img src="{{asset('/picture/'.$item -> picture)}}"></p>
    <p>{{$item -> name}}</p>
    <p>{{$item -> content}}</p>
    <p>{{$item -> price}}</p>
    <!--@php dd($item); @endphp -->
</div>
@endsection