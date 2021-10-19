<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Administrator extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are not mass assignable
     * @var string[]
     */
    protected $guarded = [];
    /**
     * Get the user that owns this right
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
    /**
     * Get the posts published by this administrator
     */
    public function posts(){
        return $this->hasMany(Post::class);
    }
    /**
     * Get the candidate reviews made by this admin
     */
    public function candidateReviews(){
        return $this->hasMany(CandidateReview::class);
    }
    /**
     * Get the jobs approved by this admin
     */
    public function approvedJobs(){
        return $this->hasMany(ApprovedJob::class);
    }
}
