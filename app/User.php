<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;



class User extends Authenticatable
{
    use HasRoles;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function cards()
    {
        return $this->hasMany(Card::class, 'user_id', 'id');
    }

    public function notes()
    {
        return $this->hasMany(Note::class, 'user_id', 'id');
    }
}
