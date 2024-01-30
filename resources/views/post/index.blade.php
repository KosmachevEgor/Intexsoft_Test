@extends('layouts.main')
@section('content')
<div>
    <a class="btn btn-dark btn-lg mt-3" href="{{route('post.create')}}">Create Post</a>
</div>
    @foreach($posts as $post)
        <div class="post mt-2 mb-2">
            <div class="post-title">
                <a href="{{route('post.show',$post->id)}}">{{$post->id}}. {{$post->title}}</a>
            </div>
            <div class="post-content">
                {{$post->content}}
            </div>
            <div class='category-content'>
                Category: {{ $post->category->title }}
            </div>
            <div class='post-btn'>
                <a class='btn btn-light mb-2 mt-2' href="{{route('post.edit', $post->id)}}">Edit</a>
                <form action="{{route('post.delete', $post->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>
            </div>
        </div>
    @endforeach
    <div class="mt-3">
        {{$posts->withQueryString()->links()}}
    </div>
@endsection
