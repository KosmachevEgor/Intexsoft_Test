@extends('layouts.main')
@section('content')
    <form action="{{route('post.update', $post->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="post-title">Title</label>
            <input type="text" class="form-control" name='title' id="post-title" value="{{$post->title}}" placeholder="Title">
        </div>
        <div class="mb-3">
            <label for="post-content" class="form-label">Content</label>
            <textarea class="form-control" name='content' id="post-content" placeholder="Content">{{$post->content}}</textarea>
        </div>
        <div class="mb-3">
            <label for="post-category">Category</label>
            <select class="form-select" id='post-category' name="category_id" aria-label="Default select example">
                @foreach($categories as $category)
                    <option
                        {{$category->id === $post->category->id ? ' selected' : '' }}
                        value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
