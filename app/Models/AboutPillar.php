<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutPillar extends Model
{
    protected $guarded = [];

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }
}
