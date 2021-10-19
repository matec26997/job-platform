<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyRepresentative extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are not mass assignable
     * @var string[]
     */
    protected $guarded = [];
    /**
     * Get the company this executive represents
     */
    public function company(){
        return $this->belongsTo(Company::class);
    }
    /**
     * Get the user that owns this representative
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
    /**
     * Get the jobs published by this representative
     */
    public function jobs(){
        return $this->hasMany(Job::class);
    }
    /**
     * Get all the candidate searches this representative has made
     */
    public function candidateSearches(){
        return $this->hasMany(CandidateSearch::class);
    }
    /**
     * Get the resume reviews done by the representative
     */
    public function resumeReviews(){
        return $this->hasMany(ResumeReview::class);
    }
}
