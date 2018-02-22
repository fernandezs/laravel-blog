<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Post;
use App\Category;
use App\Tag;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;

class PostController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }
    public function index()
    {
        $posts = Post::where('user_id', auth()->user()->id)->orderBy('id','DESC')->paginate(6);
        return view('admins.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::orderBy('name','ASC')->pluck('name','id');
        $tags       = Tag::orderBy('name', 'ASC')->get();
        return view('admins.posts.create', compact('categories', 'tags'));
    }

    public function store(PostStoreRequest $request)
    {
        $post = Post::create($request->all());

        // IMAGE
        if($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $post->fill(['file' => asset($path)])->save();
        }
        // TAGS
        $post->tags()->sync($request->get('tags'));
        return redirect()->route('posts.edit', $post->id)->with('info', 'Entrada creada con éxito');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('admins.posts.show', compact('post'));
    }

    public function edit($id)
    {
      $post = Post::find($id);
      $categories = Category::orderBy('name','ASC')->pluck('name','id');
      $tags       = Tag::orderBy('name', 'ASC')->get();
      return view('admins.posts.edit', compact('post', 'categories', 'tags'));
    }

    public function update(PostUpdateRequest $request, $id)
    {
      $post = Post::find($id);
      $post->fill($request->all())->save();
      // IMAGE
      if($request->file('file')){
        $path = Storage::disk('public')->put('image', $request->file('file'));
        $post->fill(['file' => asset($path)])->save();
      }
      // TAGS
      $post->tags()->sync($request->get('tags'));

      return redirect()->route('posts.edit', $post->id)->with('info', 'Entrada actualizada con éxito');
    }

    public function destroy($id)
    {
        $post = Post::find($id)->delete();
        return back()->with('info', 'Eliminado correctamente');
    }

}
