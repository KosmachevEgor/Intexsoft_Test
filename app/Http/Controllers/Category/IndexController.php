<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $data=$request->validated();
        $categories = Category::paginate(4);

        return view('category.index', compact('categories'));
    }
}
