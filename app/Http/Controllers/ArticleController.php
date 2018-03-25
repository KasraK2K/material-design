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
//        return User::create([
//            'name' => 'کاوه کرمی',
//            'email' => 'Kaveh_K2K@yahoo.com',
//            'password' => bcrypt('123456'),
//        ]);

        $articles = Article::latest()->paginate(3);
        return view('pages.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('pages.articles.create');
    }

    public function store(ArticleRequest $request)
    {
        auth()
            ->user()
            ->articles()
            ->create(request(['title', 'body']));

        return back();
    }

    public function show(Article $article)
    {
        $comments = $article->comments()->get();
        return view('pages.articles.show', compact('article', 'comments'));
    }
}
