<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class DestroyController extends Controller
{
    public function __invoke(Category $category)
    {

        if($category -> title == 'none'){
            
        }else{
            $category->posts()->update(['category_id' => 1]);
            $category->delete();
        }
        return redirect()->route('category.index');
    }
}
