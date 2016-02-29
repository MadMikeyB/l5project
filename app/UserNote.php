<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserNote extends Model
{
    // $note->author();
    public function author()
    {
        return $this->hasOne(User::class, 'id', 'author_id');
    }

    // $note->user(); // Recipient
    public function user()
    {
        return $this->belongsTo(User::class, 'recipient_id', 'id');
    }
}
