<h2>Included form</h2>

<form method="POST" action="/add_user">
    
    
    @if (isset($user))
    <p> Email: <input type="text" name="email" value="{{ $user->EMAIL }}"/> </p> 
    @else
    <p> Email: <input type="text" name="email" value=""/> </p> 
    @endif
    
    
    @if (isset($user))
    <p> Password: <input type="text" name="password" value="{{ $user->PASSWORD }}"/> </p> 
    @else
    <p> Password: <input type="text" name="password" value=""/> </p> 
    @endif

    @if (isset($user))
    <p> Name: <input type="text" name="password" value=""/> </p> 
    @else
    <p> Name: <input type="text" name="password" value=""/> </p> 
    @endif
 
    <input type="text" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="Добавить пользователя">
</form>
