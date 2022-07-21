<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use PHPUnit\Util\Test;

class HomeController extends Controller
{
    public function acceuil(Request $request)
    {
        return view('acceuil');
    }

public function traitement(Request $request) {
        $request->validate([
            'name' => 'required|min:4',
        ]);
        $test=new Category();
        $test->name=$request->name;
        $test->save();
        flashy()->success('information sauvgardée');
        return back();
    }


    public function post(Request $request)
    {
        $categories=Category::all();
        // dd($categories);
        return view('post',compact('categories'));
    }
    public function store_post(Request $request){
        $request->validate([
            'name' => 'required|min:4',
            'image' => 'required',
            'category_id'=>'required',
            'content'=>'required'

        ]);
        $post=new Post();
        $post->title=$request->name;
        $post->image=$request->file('image')->store('images/posts');
        $post->category_id=$request->category_id;
        $post->content=$request->content;
        $post->save();
        flashy()->success('information sauvgardée');
        return back();
    }




}
