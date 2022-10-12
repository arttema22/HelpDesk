<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // В этом мидлваре мы проверяем, имеет ли текущий Пользователь заданную Роль/Право,
    // и, если нет, то возвращаем страницу с ошибкой 404.

    //     Теперь вы можете использовать мидлвар, как показано ниже.
    // Route::group(['middleware' => 'role:web-developer'], function() {
    //    Route::get('/dashboard', function() {
    //       return 'Добро пожаловать, Веб-разработчик';
    //    });
    // });
    public function handle($request, Closure $next, $role, $permission = null)
    {
        // if (!auth()->user()->hasRole($role)) {
        //     abort(404);
        // }
        // if ($permission !== null && !auth()->user()->can($permission)) {
        //     abort(404);
        // }
        return $next($request);
    }
}
