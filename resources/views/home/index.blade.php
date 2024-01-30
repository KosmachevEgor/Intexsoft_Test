@extends('layouts.main')
@section('content')
<div>
    <h2>Posts: {{ $postsCount }}</h2>
    <h2>Categories: {{ $categoriesCount }}</h2>
</div>
@endsection
