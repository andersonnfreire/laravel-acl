<?php
namespace App\Http\Controllers\Portal;
use App\Http\Controllers\Controller;

use Gate;
use App\Model\Post;
class SiteController extends Controller {
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('portal.home.index');
    }
    
    
    
    
    /*public function update($idPost) {
        $post = Post::find($idPost);
        //$response = $this->authorize('view_post',$post);
        //dd($response);
        //$response = Gate::denies('view_post', $post);
        if (Gate::denies('edit_post', $post)) {
            return view('post-update', compact('post'));
        } else {
            abort(403,'Unauthorized');
        }
    }
    public function rolesPermissions() {
        $nomeUser = auth()->user()->name;
        echo "<h1>{$nomeUser}</h1>";
        
        foreach (auth()->user()->roles as $role) {
            echo "{$role->name} -> ";
            
            $permissions = $role->permissions;
            foreach ($permissions as $permission) {
                echo "{$permission->name} , ";
            }
            echo '<hr>';
            
        }
        
        
    }*/
}