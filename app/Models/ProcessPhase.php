<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProcessPhase extends Model
{
    protected $guarded = [];

    public function checklistItems()
    {
        return $this->hasMany(ProcessPhaseChecklistItem::class)->orderBy('sort_order');
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }
}
