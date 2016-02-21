<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
	public function notes()
	{
		return $this->hasMany(Note::class);
	}

	public function user()
	{
		return $this->hasOne(User::class, 'id');
	}
}
