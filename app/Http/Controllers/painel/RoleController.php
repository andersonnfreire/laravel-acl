<?php

namespace App\Http\Controllers\Painel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Role;
class RoleController extends Controller
{
    private $role;
    
    public function __construct(Role $role) {
        $this->role = $role;
    }
    public function index()
    {
        $roles = $this->role->all();
        return view('painel.roles.index',compact('roles'));
    }
    public function permissions($id)
    {
        //recupera o role
        $role = $this->role->find($id);
        
        //recuperando permissões
        
        $permissions = $role->permissions;
        
        return view('painel.roles.permissions',compact('role','permissions'));
        
    }
}
