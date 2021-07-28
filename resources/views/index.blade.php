@extends('layouts.app')
@section('content')
<div class="card-inner inner">
    <h2 class="page-title">商品一覧</h2>
    <form method="GET" action="{{ route('item.search')}}">
        <select class="form-control" id="makers" name="makerId" value="{{$makerId}}">
            <option value="">選択</option>
            @foreach ($makers as $id => $maker)
            <option value={{ $id }}>{{ $maker }}</option>
            @endforeach
        </select>
        <div class="col-sm-auto">
            <button type="submit" class="btn btn-primary ">検索</button>
        </div>
    </form>
    {{$items -> links()}}
    <div class="card-container">
        <div class="row">
            @push('css')
            <link href="{{ asset('css/index.css')}}" rel="stylesheet">
            @endpush
            <!--
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
-->

            @if(!empty($items))
            @foreach($items as $item)
            <div class="card-item">
                <a href="{{ route('item.show',['id' => $item -> id])}}">
                    <img src="{{ asset('/picture/'.$item->picture) }}" class="card-img">
                    <div class="card-body">
                        <p class="card-title">{{ $item->name}}</p>
                        <p class="card-text">{{ $item->price}}円</p>
                    </div>
                </a>
            </div>

            @endforeach
            @endif
        </div>
    </div>
</div>
</div>
@endsection