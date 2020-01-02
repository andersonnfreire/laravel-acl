<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Model\Permission;
use App\Model\Role;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }


    public function hasPermission(Permission $permission)
    {
        // view_post => Manager, Adm
        return $this->hasAnyRoles($permission->roles);
    }
    public function hasAnyRoles($roles) {
        // Carlos => Editor ..
        if (is_array($roles) || is_object($roles))
        {
            return !! $roles->intersect($this->roles)->count();
        }
        
        // Carlos => Manager
        return $this->roles->contains('name',$roles);
    }
}
