<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Appeal extends Model
{
    use HasFactory;

    public function people()
    {
        return $this->belongsTo(People::class);
    }

    public function getDateTimeAttribute()
    {
        return Carbon::parse($this->created_at)->format(config('app.date_full'));
    }

    public function getDateAttribute()
    {
        return Carbon::parse($this->created_at)->format(config('app.date_date'));
    }

    public function getTimeAttribute()
    {
        return Carbon::parse($this->created_at)->format(config('app.date_time'));
    }

    public function getTypeAttribute($value)
    {
        if ($value == 0) return 'Входящее';
        return 'Исходящее';
    }
}
