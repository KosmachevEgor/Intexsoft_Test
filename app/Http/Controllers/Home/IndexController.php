<?php

namespace App\Http\Controllers\Home;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Post;
use App\Models\Category;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $postsCount = Post::all()->count();
        $categoriesCount = Category::all()->count();
        return view('home.index',compact('postsCount','categoriesCount'));
    }
}
