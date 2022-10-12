<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class RolesServiceProvider extends ServiceProvider
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

    // В первой директиве мы проверяем, прошел ли Пользователь аутентификацию и имеет ли он заданную роль.
    // Во второй директиве — закрываем оператор if.

    // В шаблонах мы можем использовать директиву следующим образом:

    // @role('project-manager')
    //  Project Manager Panel
    // @endrole
    // @role('web-developer')
    //  Web Developer Panel
    // @endrole
    public function boot()
    {
        Blade::directive('role', function ($role) {
            return "<?php if(auth()->check() && auth()->user()->hasRole({$role})): ?>";
        });
        Blade::directive('endrole', function ($role) {
            return "<?php endif; ?>";
        });
    }
}
