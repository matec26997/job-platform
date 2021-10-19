<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are not mass assignable
     */
    protected $guarded = [];
    /**
     * Get the company's industries
     */
    public function industries(){
        return $this->belongsToMany(Industry::class);
    }
    /**
     * Get the company's links with other candidates
     */
    public function experiences(){
        return $this->hasMany(Experience::class);
    }
    /**
     * Get the company's representatives
     */
    public function companyRepresentatives(){
        return $this->hasMany(CompanyRepresentative::class);
    }
}
