<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResumeReview extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are not mass assignable
     * @var string[]
     */
    protected $guarded = [];
    /**
     * Get the company representative that reviewed the resume
     */
    public function companyRepresentative(){
        return $this->belongsTo(CompanyRepresentative::class);
    }
    /**
     * Get the candidate whose resume was reviewed
     */
    public function candidate(){
        return $this->belongsTo(Candidate::class);
    }
}
