<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
    
class Card extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $fillable = ['title'];

	public function notes()
	{
		return $this->hasMany(Note::class);
	}

	public function user()
	{
		return $this->hasOne(User::class, 'id', 'user_id');
	}
}
