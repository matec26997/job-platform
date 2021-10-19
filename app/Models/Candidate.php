<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidate extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are not mass assignable
     */
    protected $guarded = [];
    /**
     * Get the candidate's skills
     */
    public function skills(){
        return $this->belongsToMany(Skill::class);
    }
    /**
     * Get the candidate's studies
     */
    public function studies(){
        return $this->belongsToMany(Study::class);
    }
    /**
     * Get the candidate's industries of interest
     */
    public function industries(){
        return $this->belongsToMany(Industry::class);
    }
    /**
     * Get the candidate's list of experiences
     */
    public function experiences(){
        return $this->hasMany(Experience::class);
    }
    /**
     * Get the candidate's hobbies
     */
    public function hobbies(){
        return $this->belongsToMany(Hobby::class);
    }
    /**
     * Get the candidate's academic status changes
     */
    public function academicStatusChanges(){
        return $this->hasMany(AcademicStatusChange::class);
    }
    /**
     * Get the candidate's academic standing changes
     */
    public function academicStandingChanges(){
        return $this->hasMany(AcademicStandingChange::class);
    }
    /**
     * Get the reviews to this candidate
     */
    public function candidateReviews(){
        return $this->hasMany(CandidateReview::class);
    }
    /**
     * Get all the company searched by this candidate
     */
    public function companySearches(){
        return $this->hasMany(CompanySearch::class);
    }
    /**
     * Get all jobs the candidate has searched
     */
    public function jobSearches(){
        return $this->hasMany(JobSearch::class);
    }
    /**
     * Get all resume reviews for this candidate
     */
    public function resumeReviews(){
        return $this->hasMany(ResumeReview::class);
    }
    /**
     * Get all approved job reviews this candidate has made
     */
    public function approvedJobReviews(){
        return $this->hasMany(ApprovedJobReview::class);
    }
    /**
     * Get all applications this candidate has done
     */
    public function application(){
        return $this->hasMany(Applications::class);
    }
}
