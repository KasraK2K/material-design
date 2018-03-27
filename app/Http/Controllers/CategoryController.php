<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        $articles = $category->articles()->paginate(3);
        return view('pages.articles.index', compact('articles'));
    }
}
