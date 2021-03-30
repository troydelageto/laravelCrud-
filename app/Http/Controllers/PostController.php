<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
class PostController extends Controller
{
    public function index()
    {


        // $posts=Post::paginate(5);
        return view('posts.index')
        ->with('posts',Post::orderBy('updated_at','DESC')->get());
    }

    // the store method

    public function store(Request $request)
    {

        // dd($request);
            $request->validate([
                'title'=>'required',
                'author'=>'required',
                'post'=>'required'
            ]);

            //
        //    $request->posts()->create([
        //     'title'=>$request->title,
        //     'author'=>$request->author,
        //     'post'=>$request->post
        //    ]);

        Post::create([
            'title'=>$request->input('title'),
            'author'=>$request->input('author'),
            'post'=>$request->input('post'),
            // 'slug'=>SlugService::createSlug(Post::class,'slug',$request->id)
        ]);



           return redirect('/')->with('message','Your Post has been added!');
    }

    public function create()
    {
        return view ('posts.create');
    }


    public function show(){

    }




    // public function show(Post $post)
    // {
    // }

    // @param string $slug
    // @return \Illuminate\Http\Response

    public function edit(Post $post)
    {
        dd($post);
        // return view ('/')->with('post',Post::where('slug',$slug)->first());
            return view('/');

    }



    public function update(Request $request, $slug)
    {

        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'post'=>'required'
        ]);

        Post::where('slug',$slug)->update([
            'title'=>$request->input('title '),
            'author'=>$request->input('author'),
            'post'=>$request->input('post'),
            // 'slug'=>SlugService::createSlug(Post::class,'slug',$request->title)

        ]);

        return redirect('/posts')->with('message','Your post has been updated');
    }

    public function destroy(Post $post)
    {
            // dd($post);
            $post->delete();

            return redirect('/')->with('message','Your post has been deleted');
    }
}
