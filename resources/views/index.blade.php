@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    <h1>商品一覧</h1>
        @foreach($items as $item)
        
            <div class="card">
            <a href="{{ route('item.show',['id' => $item -> id])}}" class="col-lg-4 col-md-6">
                <img src="{{ asset('/picture/'.$item->picture) }}" class="card-img">
                <div class="card-body">
                    <p class="card-title">{{ $item->name}}</p>
                    <p class="card-text">{{ $item->price}}円</p>
                </div>
            </div>
        </a>
        @endforeach
        {{$items -> links()}}
    </div>
</div>
@endsection