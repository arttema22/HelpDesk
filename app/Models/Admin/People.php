<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Ticket;

class People extends Model
{
    use HasFactory;

    /**
     * Объекты, принадлежащие персоне
     */
    public function building()
    {
        return $this->belongsToMany(Building::class)->as('buildings');
    }

    /**
     * Обращения, принадлежащие персоне
     */
    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }

    /**
     * Аксессор
     * Получить полностью ФИО
     */
    public function getFullNameAttribute()
    {
        return $this->last_name . ' ' . $this->first_name . ' ' . $this->patronymic;
    }

    /**
     * Мутатор
     * Присвоить Имени форматирование - с большой буквы
     */
    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = Str::ucfirst(Str::lower($value));
    }
    /**
     * Мутатор
     * Присвоить Фамилии форматирование - с большой буквы
     */
    public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = Str::ucfirst(Str::lower($value));
    }
    /**
     * Мутатор
     * Присвоить Отчество форматирование - с большой буквы
     */
    public function setPatronymicAttribute($value)
    {
        $this->attributes['patronymic'] = Str::ucfirst(Str::lower($value));
    }
}
