<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\PageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $users = DB::select('select * from USERS');

    // $deleted = DB::delete('delete from USERS');

    return view('welcome',['name' => 'Dima', 'users' => $users
    ]);
    
    
});

Route::get('/edit/{id}', function ($id) {
    $user = DB::select('select * from USERS where id=?',[$id]);
    return view('edit',['user' => $user[0]]);
});



Route::post('/add_user', function () {

    DB::insert('insert into USERS (EMAIL,PASSWORD) values (?, ?)', [$_POST['email'], $_POST['password']]);

    return redirect('/');
});

Route::post('/save_user/{id}', function ($id) {

    DB::update('update USERS set EMAIL = ?, PASSWORD=? where ID = ?', [$_POST['email'], $_POST['password'], $id]);

    return redirect('/');
});




Route::get('/deluser', function () {

    $users = DB::delete('delete from USERS where id=?', [$_GET['id']]);
    return redirect('/');
    
});


Route::post('/login', function (Request $request) {
        
    if ($request->input('username') == '11' && $request->input('password') == '22') {
        $request->session()->put('is_auth', 'true');
    }
    

    return redirect('/');
});


Route::get('/logout', function (Request $request) {
    $request->session()->forget('is_auth');
    return redirect('/');
});

Route::resource('pages', 'PageController');