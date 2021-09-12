<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/route/hello', function() {
    return '<h1>Hello from Route!';
});

Route::get('view/hello', function(){
    return view('message.hello');
});

Route::get('view/var', function(){
    $variable = 'Hello from web.php';
    return view('message.var', ['variable' => $variable ]);
});

Route::get('view/word/{msg}', function($msg){
    return view('message.word', ['msg' => $msg]);
});

Route::get('/view/word/{name}/{msg}', function($name, $msg){
    return view('message.word2', [
        'name' => $name,
        'msg' => $msg
    ]);
});


Route::get('controller/hello', [App\Http\Controllers\Messagecontroller::class, 'hello']);
Route::get('controller/var', [App\Http\Controllers\Messagecontroller::class, 'var']);
Route::get('controller/word/{msg}', [App\Http\Controllers\Messagecontroller::class, 'word']);
Route::get('controller/word/{name}/{msg}', [App\Http\Controllers\Messagecontroller::class, 'word2']);

Route::get('/language', [App\Http\Controllers\LanguageController::class, 'index']);
