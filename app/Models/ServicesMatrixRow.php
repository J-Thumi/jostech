<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicesMatrixRow extends Model
{
    protected $table = 'services_matrix';
    protected $guarded = [];

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }
}
