@extends('layouts.app')
@section('content')
<div class="card-inner inner">
    <h2 class="page-title">商品一覧</h2>
    <form>
        <select class="form-control" name="company">
            <option selected="selected" value=""></option>
        </select>
    </form>
    {{$items -> links()}}
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

        </div>
    </div>
</div>
@endsection