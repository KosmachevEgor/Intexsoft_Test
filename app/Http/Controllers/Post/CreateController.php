<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('post.create', compact('categories'));
    }
}
