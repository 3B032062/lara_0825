<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Models\Post;
Route::get('/', function () {


    $post = Post::find(6);
    echo '標題：'.$post->title.'<br>';
    echo '內容：'.$post->content.'<br>';
    echo '------------------'.'<br>';
    $comments = $post->comments;
    foreach ($comments as $comment){
        echo '留言：'.$comment->content.'<br>';
        echo '-----------------------------'.'<br>';
    }


    /*all方法
    $posts = Post::all();
    foreach ($posts as $post){
        echo '編號：'.$post->id.'<br>';
        echo '標題：'.$post->title.'<br>';
        echo '內容：'.$post->content.'<br>';
        echo '張貼時間'.$post->created_at.'<br>';
    */











});
