<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
  //
  public function index()
  {
    // $posts = Post::orderBy("created_at", "desc")->paginate(10);
    //get data from DB and send data to view
    $posts = DB::table('posts')->get();
    return view('posts.index', ['posts' => $posts]);
  }
  public function create()
  {
    return view('posts.create');
  }
  public function store(Request $request)
  {
    DB::table('posts')->insert([
      'title' => $request->title,
      'content' => $request->content,
      'created_at' => now(),
      'user_id' => 1
    ]);
    return redirect()->route('posts.index')->with('SuccessMeg', 'Post Added Succes Fully');;
  }
  public function show($id)
  {
    $post = DB::table('posts')->find($id);
    return view('posts.show', ['post' => $post]);
  }
  public function edit($id)
  {
    $post = DB::table('posts')->find($id);
    return view('posts.edit', ['post' => $post]);
  }
  public function update(Request $request, $id)
  {
    DB::table('posts')->where('id', $id)->update([
      'title' => $request->title,
      'content' => $request->content
    ]);
    return redirect()->route('posts.index')->with('SuccessMeg', 'Post updated Succes Fully');
  }
  public function destroy($id)
  {
    DB::table('posts')->where('id', $id)->delete();
    return redirect()->route('posts.index')->with('SuccessMeg', 'Post deleted Succes Fully');
  }
}
