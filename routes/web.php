<?php

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('post', function(){
    // return Post::all();
    // return DB::table('posts')
    //     ->select([
    //         'posts.*',
    //         'users.username',
    //         'users.avatar'
    //     ])
    //     ->join('users', 'posts.id_user', '=', 'users.id')
    //     ->toSql();
    $post = Post::with('comment')->get();
    return $post;
});


Route::get('komentar', function(){
    // return Comment::all();
    // return DB::table('comments')
    //     ->select('comments.*', 'users.username', 'users.avatar', 'posts.media', 'posts.caption')
    //     ->join('users', 'comments.user_id', '=', 'users.id')
    //     ->join('posts', 'comments.post_id', '=', 'posts.id')
    //     ->get();
    return Comment::with(['post','user'])->get();
});

