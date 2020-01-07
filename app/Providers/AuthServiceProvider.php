<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Model\Post;
use App\Model\User;
use App\Model\Permission;
use App\Policies\PostPolicy;
use Gate;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    /*protected $policies = [
        Post::class => PostPolicy::class,
    ];*/

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        //$this->registerPolicies();
        
        //recuperando todas funcoes view_post, delete_post e papeis vinculados manager,editor ..
         $p=new Permission;
        $permissions=$p->with('roles')->get();
         
        foreach ($permissions as $permission)
        {
            Gate::define($permission->name, function(User $user) use($permission)
            {
                return $user->hasPermission($permission);
            });
        }
        
        Gate::before(function(User $user)
        {
            if ($user->hasAnyRoles('adm'))
            {
                return true;
            }
        });
        
    }
}
