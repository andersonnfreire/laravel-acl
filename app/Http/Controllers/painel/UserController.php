<?php

namespace App\Http\Controllers\Painel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Model\User;
class UserController extends Controller
{
    private $user;
    
    public function __construct(User $user) {
        $this->user = $user;
    }
    public function index() {
        $users = $this->user->all();
        return view('painel.users.index',compact('users'));
    }
     public function roles($id)
    {
        //recupera o usuário
        $users = $this->user->find($id);
        
        //recuperando roles
        
        $roles = $users->roles;
        
        return view('painel.users.roles',compact('roles','users'));
        
    }
}
