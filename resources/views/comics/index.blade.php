@extends('layouts.main')

@section('content')

    @foreach ($comics as $comic)
        <div>
            <a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a>
            <button> <a href="{{route('comics.edit', $comic->id)}}">Edit</a> </button>
        </div>
    @endforeach

    <br>
    <br>
    
    <a href="{{route('welcome')}}">Go back to previous page</a>
@endsection