@extends('layout')

@section('content')
        @parent
        This is the child content.
    <ul>
        @foreach ($users as $item)
            
                <li>{{ $item->EMAIL }} - {{ $item->PASSWORD }} 
                <a href="/deluser?id={{ $item->ID }}"> Удалить </a>
                <a href="/edit/{{ $item->ID }}"> Редактировать </a>
                </li>
           
        @endforeach
    </ul>

    @include('form')



@endsection

