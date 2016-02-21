<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
    protected $dates = ['deleted_at'];

	protected $fillable = ['body', 'user_id']; // Don't want user_id in here - need to remember how to insert it without adding to this, like card_id
	

    public function card()
    {
    	return $this->belongsTo(Card::class);
    }
    
    public function user()
	{
		return $this->belongsTo(User::class);
	}
}
