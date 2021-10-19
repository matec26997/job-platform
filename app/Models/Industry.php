<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Industry extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are not mass assignable
     */
    protected $guarded = [];
    /**
     * Get the candidates that can work in this industry
     */
    public function candidates(){
        return $this->belongsToMany(Candidate::class);
    }
    /**
     * Get the companies that operate in this industry
     */
    public function companies(){
        return $this->belongsToMany(Company::class);
    }
}
