<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = Comment::create([
            'product_id' =>$request->product_id,
            'user_id' => auth()->id(),
            'body'=>$request->body,
            'reyting'=>$request->reyting,
        ]);

        return redirect()->back();
    }
}
