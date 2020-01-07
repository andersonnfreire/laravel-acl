<?php

namespace App\Http\Controllers\Painel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Role;
use App\Model\Permission;
use Gate;
class RoleController extends Controller
{
    private $role;
    
    public function __construct(Role $role) {
        $this->role = $role;
    }
    public function index()
    {
        $roles = $this->role->all();
        if(Gate::denies('adm')){
            return redirect()->back();
            //tabort(403,'Not Permissions Lists Post');
        }
        return view('painel.roles.index',compact('roles'));
    }
    public function permissions($id)
    {
        //recupera o role
        $roles = $this->role->find($id);
        
        //recuperando permissões
        
        $permissions = $roles->permissions;
        
        return view('painel.roles.permissions',compact('roles','permissions'));
        
    }
}
