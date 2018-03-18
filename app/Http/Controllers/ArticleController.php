<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->take(10)->get();
        return view('pages.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('pages.articles.create');
    }

    public function store()
    {
        Article::create([
            'user_id'   => 1,
            'title'     => request('title'),
            'slug'      => request('title'),
            'body'      => request('body')
        ]);
        return back();
    }
}
