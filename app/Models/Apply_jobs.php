<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apply_jobs extends Model
{
    protected $guarded = [];

     public function career()
    {
        return $this->belongsTo(Careers::class,'job_id','id');
    }
}