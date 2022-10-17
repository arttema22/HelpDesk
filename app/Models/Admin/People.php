<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class People extends Model
{
    use HasFactory;

    /**
     * Объекты, принадлежащие человеку
     */
    public function building()
    {
        return $this->belongsToMany(Building::class)
            ->as('building');
    }

    public function appeal()
    {
        return $this->hasMany(Appeal::class);
    }

    public function getFullNameAttribute()
    {
        return $this->last_name . ' ' . $this->first_name . ' ' . $this->patronymic;
    }
}
