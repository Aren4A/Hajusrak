<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'comment' => 'required|string|max:255',
            'post_id' => 'exists:posts,id',

            'user_id' => 'exists:users,id',
        ]);

        $request->user()->comments()->create($validated);

        return redirect()->back()->with('message', 'Comment added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post_id)
    {
        $post = Post::find($post_id);

        // Load comments with associated user data
        $comments = Comment::with('user')->where('post_id', $post->id)->get();

        return view('posts.index', compact('post', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment): RedirectResponse
    {

        $comment->delete();

        return redirect()->back()->with('message', 'Post deleted successfully!');
    }
}
