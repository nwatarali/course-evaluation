<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /* ---------------------------- Properties --------------------------- */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'person_id', 'person_type', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    /* ---------------------------- Relationships --------------------------- */
    
    /**
     * Define relationship: one User to one Person
     *
     * @return Relation
     */
    public function person()
    {
        return $this->morphTo();
    }
}
