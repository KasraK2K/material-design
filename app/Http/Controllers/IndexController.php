<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->take(3)->get();
        return view('pages.index', compact('articles'));
    }
}
