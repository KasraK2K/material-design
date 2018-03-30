<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Http\Requests\ArticleRequest;
use App\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
//        $categories = Category::all();
        $articles = Article::latest()->paginate(3);
        return view('pages.articles.index', compact('articles'));
    }

    public function create()
    {
        $categories = Category::all()->pluck('name', 'id');
        return view('pages.articles.create', compact('categories'));
    }

    public function store(ArticleRequest $request)
    {
        $article = auth()
            ->user()
            ->articles()
            ->create(request(['title', 'body']));

        $article->categories()->attach(request('category'));

        return redirect('/article');
    }

    public function show(Article $article)
    {
        $comments = $article->comments()->get();
        return view('pages.articles.show', compact('article', 'comments'));
    }

    public function edit(Article $article)
    {
        $categories = Category::all()->pluck('name', 'id');
        return view('pages.articles.edit', compact('article', 'categories'));
    }

    public function update(Article $article, ArticleRequest $request)
    {
        $article->update(request(['title', 'body']));

        $article->categories()->sync(request('category'));

        return redirect('/article');
    }
}
