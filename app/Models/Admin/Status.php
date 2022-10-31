<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Status extends Model
{
    use HasFactory;

    /**
     * Обращения, принадлежащие статусу
     */
    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }
}
