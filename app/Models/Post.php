<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The atributes that are not mass assignable
     */
    protected $guarded = [];
    /**
     * Get the administrator that owns this post
     */
    public function administrator(){
        return $this->belongsTo(Administrator::class);
    }
}
