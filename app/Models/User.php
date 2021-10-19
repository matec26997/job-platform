<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the notifications associated with the user
     */
    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
    /**
     * Get the messages sent associated with the user
     */
    public function messagesSent()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }
    /**
     * Get the messages received associated with the user
     */
    public function messagesReceived()
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }
    /**
     * Get the candidate associated with the user
     */
    public function candidate()
    {
        return $this->hasOne(Candidate::class);
    }
    /**
     * Get the administrator associated with the user
     */
    public function administrator()
    {
        return $this->hasOne(Administrator::class);
    }
}
