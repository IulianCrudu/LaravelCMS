<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\User;
use App\Post;

class CommentController extends Controller
{
    //
    public function store(Post $post)
    {
        $this->validate(request(),[
            'comment' => 'required'
        ]);

        Comment::create([
            'user_id' => auth()->id(),
            'post_id' => $post->id,
            'body' => request('comment')
        ]);
        return back();
    }

}
