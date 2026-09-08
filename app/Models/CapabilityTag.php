<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CapabilityTag extends Model
{
    protected $guarded = [];

    public function capability()
    {
        return $this->belongsTo(Capability::class);
    }
}
