<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Отношения многие ко многим
    // Одной роли принадлежат много прав
    // Право может принадлежать многим ролям
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'roles_permissions');
    }
}
