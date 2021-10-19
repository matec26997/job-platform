<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Experience extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are not mass assignable
     */
    protected $guarded = [];
    /**
     * Get the suggested company that provided this experience
     */
    public function suggestedCompany()
    {
        return $this->belongsTo(SuggestedCompany::class);
    }
    /**
     * Get the company that provided this experience
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    /**
     * Get the candidate related to this experience
     */
    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
    /**
     * Get they Job Type for this experience
     */
    public function jobType()
    {
        return $this->belongsTo(JobType::class);
    }
}
