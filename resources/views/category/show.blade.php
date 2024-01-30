@extends('layouts.main')
@section('content')
<h2>Category: {{ $category->title }} </h2>
<div class='mb-2'>
    <form action="{{route('category.delete', $category->id)}}" method="post">
        @csrf
        @method('delete')
        <input style="<?php echo $shouldHideButton ? 'display: none;' : ''; ?>" type="submit" value="Delete">
    </form>
</div>
<div>
    <a class='btn btn-light'href="{{route('category.edit', $category->id)}}">Edit Category</a>
    <a class='btn btn-light' href="{{route('post.create', $category->id)}}">CreatePost</a>
</div>
@foreach ($category->posts as $post )
<div class="post mt-2">
    <div class="post-title">
        <a href="{{route('post.show',$post->id)}}">{{$post->id}}. {{$post->title}}</a>
    </div>
    <div class="post-content">
        {{$post->content}}
    </div>
    <div class='post-btn'>
        <a class='btn btn-light' href="{{route('post.edit', $post->id)}}">Edit</a>
        <form action="{{route('post.delete', $post->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
        </form>
    </div>
</div>
@endforeach
@endsection
