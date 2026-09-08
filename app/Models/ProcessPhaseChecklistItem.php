<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProcessPhaseChecklistItem extends Model
{
    protected $guarded = [];

    public function phase()
    {
        return $this->belongsTo(ProcessPhase::class, 'process_phase_id');
    }
}
