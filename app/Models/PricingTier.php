<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PricingTier extends Model
{
    protected $guarded = [];

    protected $casts = [
        'is_featured' => 'boolean',
    ];

    public function features()
    {
        return $this->hasMany(PricingTierFeature::class)->orderBy('sort_order');
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }
}
