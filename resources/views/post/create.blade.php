@extends('layouts.main')
@section('content')
    <form action="{{route('post.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="post-title">Title</label>
            <input type="text" class="form-control" name='title' id="post-title" placeholder="Title"
                   value="{{old('title')}}">
            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="post-content" class="form-label">Content</label>
            <textarea class="form-control" name='content' id="post-content"
                      placeholder="Content">{{old('content')}}</textarea>
            @error('content')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="post-category">Category</label>
            <select class="form-select" id='post-category' name="category_id" aria-label="Default select example">
                @foreach($categories as $category)
                    <option
                        {{old('category_id') == $category->id ? ' selected' : ''}}
                        value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
