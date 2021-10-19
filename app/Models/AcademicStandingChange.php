<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AcademicStandingChange extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are not mass assignable
     */
    protected $guarded = [];
    /**
     * Get the candidate whose status changed
     */
    public function candidate(){
        return $this->belongsTo(Candidate::class);
    }
    /**
     * Get the academic standing from that changed
     */
    public function academicStandingFrom(){
        return $this->belongsTo(AcademicStanding::class, 'from');
    }
    /**
     * Get the academic standing to that was added
     */
    public function academicStandingTo(){
        return $this->belongsTo(AcademicStanding::class, 'to');
    }
}
