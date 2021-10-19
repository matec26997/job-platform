<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApprovedJob extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are not mass assignable
     */
    protected $guarded = [];
    /**
     * Get the job that was approved
     */
    public function job(){
        return $this->belongsTo(Job::class);
    }
    /**
     * Get the administrator who approved this job
     */
    public function administrator(){
        return $this->belongsTo(Administrator::class);
    }
    /**
     * Get which candidates have seen this job
     */
    public function approvedJobReviews(){
        return $this->hasMany(ApprovedJobReview::class);
    }
    /**
     * Get the candidate applications for this approved job
     */
    public function applications(){
        return $this->hasMany(Application::class);
    }
    /**
     * Get job placement information about this job
     */
    public function jobPlacement(){
        return $this->hasOne(JobPlacement::class);
    }
}
