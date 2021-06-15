@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    <h1>買い物かごの中身</h1>
        @foreach($carts as $cart)
        
            <div class="card">
            <a href="{{ route('item.show',['id' => $item -> id])}}" class="col-lg-4 col-md-6">
                <img src="{{ asset('/picture/'.$item->picture) }}" class="card-img">
                <div class="card-body">
                    <p class="card-title">{{ $cart->item_id}}</p>
                    <p class="card-text">{{ $cart->user_id}}円</p>
                    <p class="card-text">{{ $cart->quantity}}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection