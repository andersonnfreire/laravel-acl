<?php

namespace App\Http\Controllers;

use App\Post;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post) {

        //$posts = $post->where('user_id', auth()->user()->id)->get();



        $posts = $post->all();
        return view('home', compact('posts'));
    }

    public function update($idPost) {
        $post = Post::find($idPost);

        $response = $this->authorize('view_post',$post);
        //dd($response);
        //$response = Gate::denies('view_post', $post);

        if (!$response) {
            return view('post-update', compact('post'));
        } else {
            abort(403,'Unauthorized');
        }
    }
    public function rolesPermissions() {
        $nomeUser = auth()->user()->name;
        var_dump("<h1>{$nomeUser}</h1>");
        
        foreach (auth()->user()->roles as $role) {
            echo "{$role->name} -> ";
            
            $permissions = $role->permissions;
            foreach ($permissions as $permission) {
                echo "{$permission->name} , ";
            }
            
        }
        
        
    }

}
