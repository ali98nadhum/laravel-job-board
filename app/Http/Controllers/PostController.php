<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        $data = Post::all();
        return view('post.index' , ["posts" => $data]);
    }

   function show($id){
        $data = Post::findorFail($id);
        return view('post.show' , ["post" => $data]);
    }
}
