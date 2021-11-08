@extends('layouts.main')

@section('content')
    <h4>Insert a new comic</h4>

    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" placeholder="Insert comic's title" required>
        </div>
        <br>
        <div>
            <label for="author">Author</label>
            <input type="text" id="author" name="author" placeholder="Insert comic's author" required>
        </div>
        <br>
        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description" placeholder="Insert comic's description" required>
        </div>
        <br>
        <div>
            <label for="url">Image</label>
            <input type="text" id="url" name="url" placeholder="Insert comic's image" required>
        </div>
        <br>
        <button type="reset">Erase</button>
        <button type="submit">Add</button>

    </form>

    <br>

    <a href="{{route('comics.index')}}">Go back to comics list</a>
@endsection