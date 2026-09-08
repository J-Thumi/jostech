<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PricingTierFeature extends Model
{
    protected $guarded = [];

    public function tier()
    {
        return $this->belongsTo(PricingTier::class, 'pricing_tier_id');
    }
}
