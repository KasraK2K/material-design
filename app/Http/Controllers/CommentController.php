<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Article $article, CommentRequest $request)
    {

        $article->comments()->create([
            'user_id' => auth()->user()->id,
            'comment' => request('comment')
        ]);

        return back();
    }
}
