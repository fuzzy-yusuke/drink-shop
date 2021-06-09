@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @foreach($items as $item)
        
            <div class="card">
            <a href="{{ route('item.show',['id' => $item -> id])}}" class="col-lg-4 col-md-6">
                <img src="{{ asset('/picture/'.$item->picture) }}" class="card-img">
                <div class="card-body">
                    <p class="card-title">{{ $item->name}}</p>
                    <p class="card-text">\{{ $item->price}}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection