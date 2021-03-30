<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function index(){
        return view('posts.create');
    }


    public function store(Request $request)
    {

        dd($request);
            $request->validate([
                'title'=>'required',
                'author'=>'required',
                'post'=>'required'
            ]);


        //    $request->posts()->create([
        //     'title'=>$request->title,
        //     'author'=>$request->author,
        //     'post'=>$request->post
        //    ]);

        // Post::create([
        //     'title'=>$request->input('title '),
        //     'author'=>$request->input('author'),
        //     'post'=>$request->input('post'),
        //     // 'slug'=>SlugService::createSlug(Post::class,'slug',$request->title)
        // ]);



           return redirect('/index')->with('message','Your Post ahs been added!');
    }
}
