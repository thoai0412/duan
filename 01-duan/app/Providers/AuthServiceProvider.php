<?php

namespace App\Providers;

use App\Policies\SettingPolicy;
use App\Product;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('category-list', 'App\Policies\CategoryPolicy@view');
        Gate::define('category-add', 'App\Policies\CategoryPolicy@create');
        Gate::define('category-edit', 'App\Policies\CategoryPolicy@update');
        Gate::define('category-delete', 'App\Policies\CategoryPolicy@delete');


        Gate::define('role-view', 'App\Policies\RolePolicy@view');


        Gate::define('product-edit', function($user, $id){
            $product = Product::fint($id);
            if($user->checkPermissionAccess('product_edit') && $user->id === $product->user_id){
                return true;
            }
            // return $user->checkPermissionAccess('product_edit');
            return false;
        });




        Gate::define('setting-view', 'App\Policies\SettingPolicy@view');
        Gate::define('setting-create', 'App\Policies\SettingPolicy@create');
        Gate::define('setting-update', 'App\Policies\SettingPolicy@update');
        Gate::define('setting-delete', 'App\Policies\SettingPolicy@delete');


        Gate::define('list-menu', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.list-menu'));
        });
    }

}
