<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class ShowController extends Controller
{
    public function __invoke(Category $category)
    {
        $shouldHideButton = false;
        if($category->id == 1){
            $shouldHideButton = true;
        }
        return view('category.show', compact('category','shouldHideButton'));
    }
}
