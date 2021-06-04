@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <table>
                @foreach($items as $item)
                <tr>
                    <td>
                        <a href='{{ route("item.show",["id" => $item->id])}}'>
                            {{$item->picture}},
                            {{$item->name}}
                        </a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col">
            <div id="example"></div>
        </div>
    </div>
</div>
@endsection