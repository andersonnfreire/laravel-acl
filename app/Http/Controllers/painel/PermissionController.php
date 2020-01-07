<?php

namespace App\Http\Controllers\Painel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Permission;
class PermissionController extends Controller
{
    private $permission;
    
    public function __construct(Permission $permission) {
        $this->permission = $permission;
    }
    public function index()
    {
        $permissions = $this->permission->all();
        return view('painel.permissions.index',compact('permissions'));
    }
     public function roles($id)
    {
        //recupera o permission
        $permissions = $this->permission->find($id);
        
        //recuperando permissões
        
        $roles = $permissions->roles;
        
        return view('painel.permissions.roles',compact('roles','permissions'));
        
    }
}
