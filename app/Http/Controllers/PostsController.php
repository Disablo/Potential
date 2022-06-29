<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index() {
        $post = new Post;
        $post->title = 'Autumn';
        $post->body = '...';
        $post->tags = 'leafs';
        $post->save();
    }
}
