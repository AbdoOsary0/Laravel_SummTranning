<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
  public function DisplayPosts()
  {
    $Posts = [
      ["title" => "title1", "des" => "des title1"],
      ["title" => "title1", "des" => "des title1"],
      ["title" => "title1", "des" => "des title1"],
      ["title" => "title1", "des" => "des title1"],
      ["title" => "title1", "des" => "des title1"]
    ];
  
    return view("Components.post", ["Post"=> $Posts]);
  }
}
