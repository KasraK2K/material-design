<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use App\Http\Requests\CommentRequest;
use App\Mail\CommentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{
    public function store(Article $article, CommentRequest $request)
    {
        $user = auth()->user();

        $article->comments()->create([
            'user_id' => $user->id,
            'comment' => request('comment')
        ]);

        Mail::to($user->email)->send(new CommentMail($user));

        return back();
    }
}
