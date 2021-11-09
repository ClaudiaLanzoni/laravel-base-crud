@extends('layouts.main')

@section('content')
    <h4>Edit comic {{$comic->title}}</h4>

    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        {{-- id inserito come array letterale, id è un parametro della funzione update --}}
        {{-- dopo aver compilato la funzione update l'ha preso con $comic->id, perchè? --}}
        {{-- method POST perchè non voglio si veda la stringa nella URI --}}
        @method('PATCH')
        {{-- crea input type nascosto che avrà name _patch --}}
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" placeholder="Insert comic's title"
            value="{{$comic->title}}" required>
        </div>
        <br>
        <div>
            <label for="author">Author</label>
            <input type="text" id="author" name="author" placeholder="Insert comic's author"
            value="{{$comic->author}}" required>
            {{-- riceviamo entità da modificare dal controller e inseriamo i valori preesistenti tramite value --}}
        </div>
        <br>
        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description" placeholder="Insert comic's description"
            value="{{$comic->description}}" required>
        </div>
        <br>
        <div>
            <label for="url">Image</label>
            <input type="text" id="url" name="url" placeholder="Insert comic's image"
            value="{{$comic->url}}" required>
        </div>
        <br>
        <button type="reset">Erase</button>
        <button type="submit">Add</button>

    </form>

    <br>

    <a href="{{route('comics.index')}}">Go back to comics list</a>
@endsection