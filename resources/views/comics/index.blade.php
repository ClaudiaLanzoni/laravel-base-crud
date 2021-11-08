@extends('layouts.main')

@section('content')

    @foreach ($comics as $comic)
        <div>
            <a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a>
        </div>
    @endforeach

    <br>
    <br>
    
    <a href="{{route('welcome')}}">Go back to previous page</a>
@endsection