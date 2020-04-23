@extends('user')
@section('title')
    Strong
@endsection
@section('content')
    @foreach($_POST as $key=>$value)
        @if($loop->first)
            <p class="text">This is the first element in POSTS!</p>
        @endif
        @if($loop->last)
            <p class="text">This is the first element in POSTS!</p>
        @endif
       <h1>{{$_POST[$key]}}</h1>
    @endforeach
@endsection
