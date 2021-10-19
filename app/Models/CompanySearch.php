<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanySearch extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributed that are not mass assignable
     */
    protected $guarded = [];
    /**
     * Get the candidate that searched this
     */
    public function candidate(){
        return $this->belongsTo(Candidate::class);
    }
}
