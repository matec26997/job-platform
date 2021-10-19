<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are not mass assignable
     * @var string[]
     */
    protected $guarded = [];
    /**
     * Get the candidates that possess this skill
     */
    public function candidates(){
        return $this->belongsToMany(Candidate::class);
    }
    /**
     * Get the jobs that require this skills
     */
    public function jobs(){
        return $this->belongsToMany(Job::class);
    }
    
}
