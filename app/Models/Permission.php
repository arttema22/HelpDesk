<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    // Отношения многие ко многим
    // Одной роли принадлежат много прав
    // Право может принадлежать многим ролям
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'roles_permissions');
    }
}
