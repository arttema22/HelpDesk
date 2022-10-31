<?php

namespace App\Models;

use App\Traits\HasRolesAndPermissions;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRolesAndPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'patronymic',
        'phone',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

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
