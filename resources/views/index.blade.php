@extends('layouts.app')
@section('content')
<div class="card-inner inner">
    <h2 class="page-title">商品一覧</h2>


    <div class="card-container">
        <div class="row">
            @push('css')
            <link href="{{ asset('css/index.css')}}" rel="stylesheet">
            @endpush
            @foreach($items as $item)
            <div class="card-item">
                <a href="{{ route('item.show',['id' => $item -> id])}}">
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
</div>
@endsection