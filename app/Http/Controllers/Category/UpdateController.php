<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Request $request, Category $category)
    {
        $category->title = $request->title;
        $category->save();

        return redirect()->route('category.show', $category->id);
    }
}
