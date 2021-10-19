<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are not mass assignable
     * @var string[]
     */
    protected $guarded = [];

    /**
     * Gets the user that sent the message
     */
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
    /**
     * Gets the user that received the message
     */
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }
    /**
     * Gets the parent message
     */
    public function repliedTo()
    {
        return $this->belongsTo(Message::class, 'reply_to');
    }
    /**
     * Gets the messages that have replied to this
     */
    public function replies()
    {
        return $this->hasMany(Message::class, 'reply_to');
    }
}
