# subscribed by nitish kumar
# https://m.facebook.com/story.php?story_fbid=2746412395598393&id=100006889785546


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
Route::get('/chat',function(){
	return view('chat');
});
Route::get('/checkhome',function(){
    return view('checkview');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
