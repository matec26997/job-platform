<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AcademicStanding extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are not mass assignable
     */
    protected $guarded = [];
    /**
     * Get the candidates that possess this academic standing
     */
    public function candidates(){
        return $this->hasMany(Candidate::class);
    }
    /**
     * Get the from changes
     */
    public function academicStandingFromChanges(){
        return $this->hasMany(AcademicStandingChange::class,'from');
    }
    /**
     * Get the to changes
     */
    public function academicStandingToChanges(){
        return $this->hasMany(AcademicStandingChange::class, 'to');
    }
}
