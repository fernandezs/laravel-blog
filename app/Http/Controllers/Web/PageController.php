<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\Tag;
class PageController extends Controller
{
    public function blog(){
      $posts = Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);
      return view('web.posts',compact('posts'));
    }

    public function post($slug){
      $post = Post::where('slug', $slug)->first();
      return view('web.post', compact('post'));
    }

    public function category($slug){
      //pluck devuelve unicamente el dato pasado por parametro, first solo el primer registro
      $category = Category::where('slug', $slug)->pluck('id')->first();
      $posts = Post::where('category_id', $category)->orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);
      return view('web.posts',compact('posts'));
    }

    public function tag($slug){
      $posts = Post::whereHas('tags', function($query) use ($slug){
        $query->where('slug', $slug);
      })->orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);

      return view('web.posts',compact('posts'));
    }
}
