@extends('layouts.main')
@section('content')
<form action="{{route('category.store')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="category-title">Title</label>
        <input type="text" class="form-control" name='title' id="category-title" placeholder="Title"
               value="{{old('title')}}">
        @error('title')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection
