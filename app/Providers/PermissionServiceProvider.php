<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Permission;
use Illuminate\Support\Facades\Gate;

class PermissionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    // Здесь мы сопоставляем все Права, определяем slug Права (в нашем случае) и проверяем,
    // есть ли у Пользователя Право. Теперь вы можете проверить Права Пользователя, как показано ниже.

    // //вернёт true для текущего пользователя, если ему дано право управлять пользователями
    // Gate::allows('manage-users');
    public function boot()
    {
        try {
            Permission::get()->map(function ($permission) {
                Gate::define($permission->slug, function ($user) use ($permission) {
                    return $user->hasPermissionTo($permission);
                });
            });
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
}
