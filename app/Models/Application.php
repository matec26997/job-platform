<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Application extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are not mass assignable
     */
    protected $guarded = [];
    /**
     * Get the application's approved job review
     */
    public function approvedJobReview(){
        return $this->belongsTo(ApprovedJobReview::class);
    }
    /**
     * Get the application's approved job
     */
    public function approvedJob(){
        return $this->belongsTo(ApprovedJob::class);
    }
    /**
     * Get the application's candidate
     */
    public function candidate(){
        return $this->belongsTo(Candidate::class);
    }
    /**
     * Get the application's job placement
     */
    public function jobPlacement(){
        return $this->hasOne(JobPlacement::class);
    }
}
