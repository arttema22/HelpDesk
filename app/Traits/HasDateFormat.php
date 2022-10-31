<?php

namespace App\Traits;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Carbon;

trait HasDateFormat
{
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
}
