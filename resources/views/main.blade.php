<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        @foreach($allPosts as $Post)
            <div>
                <div class="cover">
                    <img src="{{$Post['cover']}}" alt="">
                </div>
                <div class='description'>
                    <p>{{$Post['description']}}</p>
                </div>
                <div class='likes'>
                    <p>{{$Post['likes']}}</p>
                </div>
            </div>
        @endforeach
    </body>
</html>
