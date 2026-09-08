<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeProcessStep extends Model
{
    protected $guarded = [];

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }
}
