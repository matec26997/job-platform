<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobPlacement extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are not mas assignable
     */
    protected $guarded = [];
    /**
     * Get the approved job for this placement
     */
    public function approvedJob(){
        return $this->belongsTo(ApprovedJob::class);
    }
    /**
     * Get the application for this placement
     */
    public function application(){
        return $this->belongsTo(Application::class);
    }
    /**
     * Get the employer rating for this placement
     */
    public function employerRating(){
        return $this->hasOne(EmployerRating::class);
    }
    /**
     * Get the employee rating for this placement
     */
    public function employeeRating(){
        return $this->hasOne(EmployeeRating::class);
    }
}
