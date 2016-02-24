<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

	protected $fillable = ['body']; // @todo user_id should not be fillable
	

    public function card()
    {
    	return $this->belongsTo(Card::class);
    }
    
    public function user()
	{
		return $this->belongsTo(User::class);
	}
}
