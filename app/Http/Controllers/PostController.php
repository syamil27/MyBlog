<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
   
   /** 
   * @return  void
   */
   public function index(){
        $posts = Post::latest()->paginate(5);

        return view('posts.index', compact('posts'));
    }
}
