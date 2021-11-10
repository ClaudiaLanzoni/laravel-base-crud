@extends('layouts.main')

@section('content')
    @foreach ($comics as $comic)
    
    <div class="comic_list text-center mt-3">
        
        <div class="comic_box">
            <a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a>
            <button type="button" class="btn btn_comic"><a class="text-white" href="{{route('comics.edit', $comic)}}">Edit</a></button>
        </div>

        <div class="erase_btn_box mb-5">
            <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="delete_form"
                data-comic-name="{{$comic->title}}">
                @method('DELETE')
                @csrf

                <button type="submit" class="btn btn-dark">Erase {{$comic->title}}</button>
                
            </form>
        </div>
        
    @endforeach
        <div class="go_back_link">

            <a href="{{route('welcome')}}">Go back to previous page</a>

        </div>
    
    
    </div>

    @endsection
    

@section('script-section')
        <script>
            let deleteElement = document.querySelectorAll(".delete_form");
            deleteElement.forEach(form => {
                form.addEventListener('submit', function(event) {
                    event.preventDefault();
                    let title = form.getAttribute("data-comic-name");
                    let confirm = window.confirm(`Want to delete ${title}?`);
                    if (confirm) this.submit(); //this perchè siamo in funzione normale
                })
            });
        </script>
@endsection