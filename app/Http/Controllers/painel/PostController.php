<?php

namespace App\Http\Controllers\Painel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Post;
class PostController extends Controller
{
    
    private $post;
    
    public function __construct(Post $post)
    {
        $this->post = $post;
    }


    
    public function index()
    {
        $posts = $this->post->all();
        return view('painel.posts.index', compact('posts'));
    }
}
