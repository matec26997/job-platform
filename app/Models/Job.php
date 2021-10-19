<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are not mass assignable
     */
    protected $guarded = [];
    /**
     * Get the company representative who posted this job
     */
    public function companyRepresentative(){
        return $this->belongsTo(CompanyRepresentative::class);
    }
    /**
     * Get the skills this job requires
     */
    public function skills(){
        return $this->belongsToMany(Skills::class);
    }
    /**
     * Get the approval information for this job
     */
    public function approvedJob(){
        return $this->hasOne(ApprovedJob::class);
    }
}
