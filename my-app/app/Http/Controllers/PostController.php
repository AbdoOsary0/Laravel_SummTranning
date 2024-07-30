<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PharIo\Manifest\Author;

class PostController extends Controller
{
  //
  public function index()
  {
    // show all Posts
    $posts = [
      ['title' => "title1", 'description' => 'This the First Post', 'author' => "Ahmed", "createAt" => "12/10/2020"],
      ['title' => "title2", 'description' => 'This the First Post', 'author' => "Abdo", "createAt" => "12/10/2020"],
      ['title' => "title2", 'description' => 'This the First Post', 'author' => "Mahmoud", "createAt" => "12/10/2020"],
      ['title' => "title3", 'description' => 'This the First Post', 'author' => "Mohammed", "createAt" => "12/10/2020"],
      ['title' => "title4", 'description' => 'This the First Post', 'author' => "Malk", "createAt" => "12/10/2020"],
      ['title' => "title5", 'description' => 'This the First Post', 'author' => "Nora", "createAt" => "12/10/2020"]
    ];
    // $posts = DB::table("posts")->get();
    return view("posts.show", ['posts' => $posts]);
  }
  function create()
  {
    return view('posts.create');
  }
}
