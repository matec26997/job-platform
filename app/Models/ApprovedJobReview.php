<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApprovedJobReview extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are not mass assignable
     */
    protected $guarded = [];
    /**
     * Get the approved job that the candidate reviewed
     */
    public function job(){
        return $this->belongsTo(ApprovedJob::class);
    }
    /**
     * Get the candidate that reviewed this job
     */
    public function candidate(){
        return $this->belongsTo(Candidate::class);
    }
    /**
     * Get the application that corresponds to this review
     */
    public function application(){
        return $this->hasOne(Application::class);
    }
}
