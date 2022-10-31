<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Admin\People;
use Illuminate\Support\Carbon;
use App\Models\Admin\Status;
use App\Models\Admin\Building;
use App\Models\Message;
use App\Traits\HasDateFormat;

class Ticket extends Model
{
    use HasFactory, HasDateFormat;

    /**
     * Сообщения, принадлежащие обращению
     */
    public function mess()
    {
        return $this->hasMany(Message::class);
    }

    /**
     * Персона, которой принадлежит сообщение
     */
    public function people()
    {
        return $this->belongsTo(People::class);
    }

    /**
     * Объект, который привязан к сообщению
     */
    public function building()
    {
        return $this->belongsTo(Building::class);
    }

    /**
     * Статус, которой установлен сообщению
     */
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    /**
     * Мутатор
     * Присвоить Заголовку форматирование - с большой буквы
     */
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = Str::ucfirst(Str::lower($value));
    }

    public function getTypeAttribute($value)
    {
        if ($value == 0) return 'Входящее';
        return 'Исходящее';
    }
}
