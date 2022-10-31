<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    /**
     * Обращения, принадлежащие объекту
     */
    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }
    /**
     * Люди, принадлежащие объекту
     */
    public function people()
    {
        return $this->belongsToMany(People::class)
            ->as('people');;
    }
}
