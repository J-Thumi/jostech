<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Capability extends Model
{
    protected $guarded = [];

    public function features()
    {
        return $this->hasMany(CapabilityFeature::class)->orderBy('sort_order');
    }

    public function tags()
    {
        return $this->hasMany(CapabilityTag::class)->orderBy('sort_order');
    }

    public function scopeForPage($query, string $page)
    {
        return $query->where('page', $page)->orderBy('sort_order');
    }
}
