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

    /*find方法
    $post = Post::find(1);
    echo '標題：'.$post->title.'<br>';
    echo '內容：'.$post->content.'<br>';
    dd($post);
    */

    /*all方法
    $posts = Post::all();
    foreach ($posts as $post){
        echo '編號：'.$post->id.'<br>';
        echo '標題：'.$post->title.'<br>';
        echo '內容：'.$post->content.'<br>';
        echo '張貼時間'.$post->created_at.'<br>';
       };
    */

    /*條件式
    $posts = Post::where('id','<',10)->orderBy('id','DESC')->get();
    dd($posts);
    */

    $post = Post::find(1);
    $post->update([
        'title'=>'update title',
        'content'=>'update content',
    ]);
    return 'updated';




});
