<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function index(){
    	$posts=Post::orderBy('id','desc')->paginate(10);
    	return view('welcome')->with('posts',$posts);
    }
}
