<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
	protected $fillable = ['title', 'user_id']; // @todo user_id should not be fillable.

	public function notes()
	{
		return $this->hasMany(Note::class);
	}

	public function user()
	{
		return $this->hasOne(User::class, 'id');
	}
}
