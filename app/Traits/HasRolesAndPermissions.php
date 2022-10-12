<?php

namespace App\Traits;

use App\Models\Role;
use App\Models\Permission;

trait HasRolesAndPermissions
{
    // Отношения многие ко многим
    // Одной роли принадлежат много пользователей
    // Пользователь может иметь несколько ролей
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'users_roles');
    }
    // Отношения многие ко многим
    // Одному праву принадлежат много пользователей
    // Пользователь может иметь несколько прав
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'users_permissions');
    }

    // В функцию мы передаем массив $roles
    // и проверяем в цикле, содержат ли роли текущего пользователя заданную роль.
    public function hasRole($roles)
    {
        foreach ($roles as $role) {
            if ($this->roles->contains('slug', $role)) {
                return true;
            }
        }
        return false;
    }

    // Метод проверяет, содержат ли права пользователя заданное право,
    // если да, то тогда он вернет true, а иначе false.
    public function hasPermission($permission)
    {
        return (bool) $this->permissions->where('slug', $permission)->count();
    }

    public function hasPermissionTo($permission)
    {
        return $this->hasPermissionThroughRole($permission) || $this->hasPermission($permission->slug);
    }

    // Эта функция проверяет, привязана ли Роль с Правами к Пользователю.
    // Метод hasPermissionTo() проверит эти два условия.
    public function hasPermissionThroughRole($permission)
    {
        foreach ($permission->roles as $role) {
            if ($this->roles->contains($role)) {
                return true;
            }
        }
        return false;
    }
    // Функция получает все Права на основе переданного массива
    public function getAllPermissions(array $permissions)
    {
        return Permission::whereIn('slug', $permissions)->get();
    }

    // Функция передаем Права в виде массива и
    //  получаем все Права из базы данных на основе массива
    public function givePermissionsTo($permissions)
    {
        $permissions = $this->getAllPermissions($permissions);
        if ($permissions === null) {
            return $this;
        }
        $this->permissions()->saveMany($permissions);
        return $this;
    }
    // Удаление всех прав у пользователя
    public function deletePermissions($permissions)
    {
        $permissions = $this->getAllPermissions($permissions);
        $this->permissions()->detach($permissions);
        return $this;
    }
    // Переназначение прав пользователю
    public function refreshPermissions($permissions)
    {
        $this->permissions()->detach();
        return $this->givePermissionsTo($permissions);
    }
}
