<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{

  public function index()
  {
    $posts = Post::all();
    return view('posts.index', ['posts' => $posts]);
  }
  public function create()
  {
    return view('posts.create');
  }
  public function store(PostFormRequest $request)
  {
    $request->validate([
      // or ['required','min:5']
      'title' => 'required|min:5',
      'content' => 'required|min:10',
    ]);
    Post::create([
      'title' => $request->title,
      'content' => $request->content,
      'created_at' => now(),
      'user_id' => 1
    ]);
    return redirect()->route('posts.index')->with('SuccessMeg', 'Post Added Succes Fully');
  }
  public function show($id)
  {
    $post = Post::findOrFail(intval($id));
    return view('posts.show', ['post' => $post]);
  }
  public function edit($id)
  {
    $post = Post::findOrFail(intval($id));
    return view('posts.edit', ['post' => $post]);
  }
  public function update(PostFormRequest $request, $id)
  {
    Post::Where('id', $id)->update([
      'title' => $request->title,
      'content' => $request->content,
      'updated_at ' => now(),
    ]);
    return redirect()->route('posts.index')->with('SuccessMeg', 'Post updated Succes Fully');
  }
  public function destroy($id)
  {
    Post::findOrFail(intval($id))->delete();
    // Post::destroy($id);
    return redirect()->route('posts.index')->with('SuccessMeg', 'Post deleted Succes Fully');
  }
}
