<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;
use App\Traits\HasDateFormat;
use Illuminate\Support\Carbon;

class Message extends Model
{
    use HasFactory, HasDateFormat;

    /**
     * Обращение, которому принадлежит сообщение
     */
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
