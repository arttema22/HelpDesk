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

    public function getDateAttribute()
    {
        return Carbon::parse($this->created_at)->format(config('app.date_date'));
    }

    public function getTimeAttribute()
    {
        return Carbon::parse($this->created_at)->format(config('app.date_time'));
    }
}
