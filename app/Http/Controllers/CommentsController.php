<?php

namespace App\Http\Controllers;

use App\comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function create(Request $request) {
        $comment = new comments();
        $comment->name = $request->name;
        $comment->comment = $request->comment;
        $comment->slug = $request->slug;
        $comment->save();
        return redirect('films/'.$request->slug);
    }
}
