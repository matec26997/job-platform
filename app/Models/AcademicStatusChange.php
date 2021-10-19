<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AcademicStatusChange extends Model
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
     * Get the status from that changed
     */
    public function academicStatusFrom(){
        return $this->belongsTo(AcademicStatus::class, 'from');
    }
    /**
     * Get the status to that changed
     */
    public function academicStatusTo(){
        return $this->belongsTo(AcademicStatus::class,'to');
    }
}
