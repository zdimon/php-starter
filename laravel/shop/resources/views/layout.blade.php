<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        
    </head>
    <body>
       <h1>Hello</h1>




       @if(Session::has('is_auth'))
            <a href="/logout">Logout</a>
       @else    
            <form action="/login" method="POST">
                    @csrf
                    <input name="username" />
                    <input name="password" />
                    <input type="submit" value="Вход" />
            </form>
        @endif
        

       <ul>
            @foreach ($users as $item)
                <li>{{ $item->EMAIL }}</li>
            @endforeach
        </ul>
       

       @section('content')
            This is the parent content.
       @show


    </body>
</html>
