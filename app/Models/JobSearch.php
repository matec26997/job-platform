<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobSearch extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are not mass assignable
     */
    protected $guarded = [];
    /**
     * Get the candidate that did the search
     */
    public function candidate(){
        return $this->belongsTo(Candidate::class);
    }
}
