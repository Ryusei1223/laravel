<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Http\Requests\PostRequests;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index(Post $post)
  {
    return view("posts/index")->with(["posts"=>$post->getPaginateBylimit()]);
  } //

   public function show(Post $post)
  {
    return view('posts/show')->with(['post' => $post]);
  }


}
/**
 * Post一覧を表示する
 * 
 * @param Post Postモデル
 * @return array Postモデルリスト
 */
