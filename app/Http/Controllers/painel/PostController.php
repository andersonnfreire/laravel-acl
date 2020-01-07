<?php

namespace App\Http\Controllers\Painel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gate;
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
        if(Gate::denies('view_post')){
            return redirect()->back();
            //tabort(403,'Not Permissions Lists Post');
        }
        return view('painel.posts.index', compact('posts'));
    }
}
