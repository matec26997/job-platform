<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AcademicStatus extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are not mass assignable
     */
    protected $guarded = [];
    /**
     * Get the candidates that possess this Academic Status
     */
    public function candidates(){
        return $this->hasMany(Candidate::class);
    }
    /**
     * Get the 
     */
    public function academicStatusFromChanges(){
        return $this->hasMany(AcademicStatusChange::class, 'from');
    }
    /**
     * 
     */
    public function academicStatusToChanges(){
        return $this->hasMany(AcademicStatusChange::class, 'to');
    }
}
