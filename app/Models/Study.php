<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Study extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are not mass assigable
     */
    protected $guarded = [];
    /**
     * Get the candidates that possess this study 
     */
    public function candidates(){
        return $this->belongsToMany(Candidate::class);
    }
    /**
     * Get the jobs that require this study
     */
    public function jobs(){
        return $this->belongsToMany(Job::class);
    }
}
