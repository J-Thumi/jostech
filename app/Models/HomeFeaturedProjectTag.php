<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeFeaturedProjectTag extends Model
{
    protected $guarded = [];

    public function project()
    {
        return $this->belongsTo(HomeFeaturedProject::class, 'home_featured_project_id');
    }
}
