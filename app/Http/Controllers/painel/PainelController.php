<?php

namespace App\Http\Controllers\Painel;
use App\Http\Controllers\Controller;

use App\Model\User;
use App\Model\Post;
use App\Model\Permission;
use App\Model\Role;

class PainelController extends Controller
{
    public function index()
    {
        $totUsers = User::count();
        $totRoles = Role::count();
        $totPermissions = Permission::count();
        $totPosts = Post::count();
        
        return view('painel.home.index', compact('totUsers','totRoles','totPermissions','totPosts'));
    }
}
