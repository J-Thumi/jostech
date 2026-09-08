<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeFeaturedProject extends Model
{
    protected $guarded = [];

    public function tags()
    {
        return $this->hasMany(HomeFeaturedProjectTag::class)->orderBy('sort_order');
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }
}
