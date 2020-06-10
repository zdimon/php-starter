@extends('layout')

<h1>Edit {{ $user->EMAIL }} </h1>

<form method="POST" action="/save_user/{{ $user->ID }}">
        <p> Email: <input type="text" name="email" value="{{ $user->EMAIL }}" /> </p> 
        <p> Password: <input type="text" name="password" value="{{ $user->PASSWORD }}"  /> </p>
        <input type="text" name="_token" value="{{ csrf_token() }}">
        <input type="submit" value="Сохранить">
</form>
