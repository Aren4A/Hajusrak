<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Chirp $chirp): RedirectResponse
    {
        $validated = $request->validate([
            'content' => 'required|string|max:255',
        ]);

        $comment = new Comment();
        $comment->content = $validated['content'];
        $comment->user_id = $request->user()->id; // Assuming the comment is associated with the authenticated user
        $comment->chirp_id = $request->user()->id; // Assigning the chirp_id-> hetkel kuvab kõiki kommentaare esimesele chirpile  !!!!!!!!!!!
        $comment->save();

        return back()->with('success', 'Comment posted successfully.');
    }
}
