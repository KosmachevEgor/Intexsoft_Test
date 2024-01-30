@extends('layouts.main')
@section('content')
<form action="{{route('category.update', $category->id)}}" method="post">
    @csrf
    @method('patch')
    <div class="mb-3">
        <label for="category-title">Title</label>
        <input type="text" class="form-control" name='title' id="category-title" placeholder="Title"
               value="{{$category->title}}">
        @error('title')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
