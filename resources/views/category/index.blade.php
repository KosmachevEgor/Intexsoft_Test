@extends('layouts.main')
@section('content')
<h2 style="text-align:center">Categories</h2>
<a class="btn btn-dark btn-lg mt-3 mb-2" href="{{route('category.create')}}">Create Category</a>
<div class='grid-container'>
@foreach ($categories as $category)
<a class='btn grid-element' href="{{route('category.show',$category->id)}}">{{$category->title}}</a>
@endforeach
</div>
<div class="mt-3">
    {{$categories->links()}}
</div>
@endsection
