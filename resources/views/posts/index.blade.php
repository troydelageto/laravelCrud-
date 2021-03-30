@extends('layouts.app')

@section('content')

<div class="container bg-light p-3">
    <div class="mr-auto">
        <h1>Blog Posts</h1>
    </div>

    @if (session()->has('message'))

    <div class="container alert alert-success">
        {{session()->get('message')}}
    </div>

    @endif
    <div>
        <a href=" {{route('create')}}" class="btn btn-lg btn-outline-success">Create New Post!</a>
    </div>


    @if ($posts->count())
    @foreach ($posts as $post)
    <div class="jumbotron my-2">
        <h6 class="display-4">{{$post->title}} </h6>
        <p class="lead mt-4">{{$post->post}}</p>
        <hr class="my-4">
        <p><strong>Author: </strong> {{$post->author}}</p>
        <span><strong>Created: </strong> {{$post->created_at->diffForHumans()}}</span>
        <span>{{$post->slug}}</span>
        <div class="my-2">
            <a href="" class="btn btn-sm btn-outline-primary">Edit</a>

            <form style="display: inline-block;" action="{{route('posts.destroy',$post)}}" method="POST">

                <input type="hidden" name="id" value="">

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
            </form>


        </div>


    </div>

    @endforeach

    @else
    <p>there are no posts</p>

    @endif
</div>

@endsection
