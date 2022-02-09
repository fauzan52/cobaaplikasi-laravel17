<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;

class AuthorController extends Controller
{
    public function index()
    {
        $author = Author::get();
        return view('authors', [
            "title" => 'Post Author',
            "active" => 'author',
            "authors" => $author
        ]);
    }

    public function show(Author $author)
    {
        $posts = Post::where('author')->paginate(7)-get();
        return view('posts', [
            'title' => "Post By Author : $posts->author",
            'active' => 'authors',
            'posts' => $posts,
        ]);
    }
}
