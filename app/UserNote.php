<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserNote extends Model
{
	// $note->author();
    public function author()
	{
		return $this->belongsTo(User::class);
	}

	// $note->user(); // Recipient
	public function user()
	{
		return $this->hasOne(User::class, 'user_id', 'recipient_id');
	}


}
