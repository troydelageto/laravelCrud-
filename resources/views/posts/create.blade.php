@extends('layouts.app')

@section('content')

<div class="container py-3 my-3">
    <h1>Create New Posts</h1>
</div>

@if($errors->any())
    <div class="container alert alert-warning">
        <ul>
        @foreach ($errors->all() as $error)
            <li class="bg-alert">{{$error}}</li>
        @endforeach
        </ul>

    </div>


@endif
<div class="container bg-light p-3">

@csrf
    <form action="{{route('create')}}" method="post">
        @csrf
        <div class="form-group my-3">
            <label> Title</label>
            <input type="text" name="title" class="form-control" value="">

        </div>


        <div class="form-group">
            <label> Author</label>
            <input type="text" name="author" class="form-control" value="">

        </div>
        <div class="form-group">
            <label>Post</label>
            <textarea class="form-control" name="post"></textarea>

        </div>

        <button type="submit" class="btn btn-primary">Submit post</button>
    </form>





</div>

@endsection
