<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;


class PostController extends Controller
{
    // $username = Auth::user()->name;
    // $id = Auth::user()->id;


    public function index()
    {
        $userId = Auth::id(); // Get the logged-in user ID

        // Fetch posts along with their comments
        $posts = Post::where('user_id', $userId)
            ->with('comments') // Eager load comments
            ->latest()
            ->take(10)
            ->get();

        return view('post.index', compact('posts'));
    }

    public function show(Post $post)
    {
        // dd($post);
        return $post;
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        // Store the post
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::user()->user_id,
        ]);

        return redirect()->route('content.post')->with('success', 'Post created successfully!');
    }
    public function generatePostId()
    {
        // Get the last post_id and increment by 1
        $lastPost = \App\Models\Post::latest('post_id')->first();
        return $lastPost ? $lastPost->post_id + 1 : 1; // If no posts, start from 1
    }

    public function comment(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,post_id', // Corrected: post_id instead of id
            'content' => 'required|string',
        ]);

        Comment::create([
            'post_id' => $request->post_id,
            'user_id' => Auth::user()->user_id,
            'content' => $request->content,
        ]);

        return back()->with('success', 'Comment added successfully!');
    }

    public function commentpost(Request $request)
    {



        return view('post.commentpost');
    }

    public function showpost($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }
}