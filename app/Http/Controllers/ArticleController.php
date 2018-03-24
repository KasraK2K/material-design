<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use App\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(3);
        return view('pages.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('pages.articles.create');
    }

    public function store(ArticleRequest $request)
    {
//        $this->validate(request(), [
//            'title'     => 'required|min:5',
//            'body'      => 'required|min:25'
//        ]);

        Article::create([
            'user_id' => 1,
            'title' => request('title'),
            'body' => request('body')
        ]);
        return back();
    }

    public function show(Article $article)
    {
        return view('pages.articles.show', compact('article'));
    }
}
