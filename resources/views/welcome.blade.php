<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Comics collection</title>
</head>
<body>
    <div class="start_page">
        <div class="a_container">
            <div class="collection_link">
                <a href="{{route('comics.index')}}">Comic collection</a>
            </div>
            
            <div>/</div>
    
            <div class="new_comic_link">
                <a href="{{route('comics.create')}}">Insert a new comic</a>
            </div>
        </div>
        
        
    </div>
</body>
</html>
