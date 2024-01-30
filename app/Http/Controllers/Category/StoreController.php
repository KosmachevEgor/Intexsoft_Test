<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|unique:categories'
        ]);

        Category::create([
            'title' => $request->title
        ]);
        return redirect()->route('category.index');
    }
}
