<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
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

    /* ---------------------------- Accessors -------------------------------- */
    /**
     *
     *
     *
     */
    public function getFullName()
    {
    	$name = isset($this->prefix) ? $this->prefix . ' ' : '';
    	$name .= $this->first_name . ' ';
    	$name .= isset($this->middle_name) ? $this->middle_name . ' ' : '';
    	$name .= $this->last_name;
    	$name .= isset($this->suffix) ? ' ' . $this->suffix : '';

    	return $name;
    }
}
