<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    /* ---------------------------- Properties --------------------------- */

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    
    /* ---------------------------- Relationships --------------------------- */

    /**
     * Define relationship: one Lecturer to one User
     *
     * @return Relation
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
