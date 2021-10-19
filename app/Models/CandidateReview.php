<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidateReview extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are not mass assignable
     * @var string[]
     */
    protected $guarded = [];
    /**
     * Get the administrator that made the review
     */
    public function administrator(){
        return $this->belongsTo(Administrator::class);
    }
    /**
     * Get the candidate reviewed
     */
    public function candidate(){
        return $this->belongsTo(Candidate::class);
    }
}
