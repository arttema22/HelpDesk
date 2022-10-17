<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    /**
     * Люди, принадлежащие объекту
     */
    public function people()
    {
        return $this->belongsToMany(People::class)
            ->as('people');;
    }
}
