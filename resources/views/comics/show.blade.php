@extends('layouts.main')

@section('content')

    <img src="{{$comic->url}}" alt="{{$comic->title}} image">
    <div>{{$comic->title}}</div>
    <div>{{$comic->author}}</div>
    <div>{{$comic->description}}</div>

    <br>
    <br>
    
    <div>
        <a href="{{route('comics.index')}}">Go back to previous page</a>
    </div>

@endsection