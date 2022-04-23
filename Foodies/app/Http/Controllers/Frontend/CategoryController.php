<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();

        if(request('search'))
        {
            $categories = Category::query()->where('name' , 'like' , '%'.request('search').'%')
                ->orWhere('description' , 'like' , '%'.request('search').'%')->get();
        }

        return view('categories.index', compact('categories'));
    }

    public function show(Category $category) {
        return view('categories.show', compact('category'));
    }
}
