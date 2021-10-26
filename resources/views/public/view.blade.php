@extends('master')

@section('title', 'Nick ' . $datas->ingame)
@section('content')
    <div class="container">
        {{$datas->ingame}}
    </div>
@endsection
