<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{

				    public function student() 
				    {
				       return $this->belongsTo('App\Models\Student');
				    }
				    public function lecturer()
				    {
				       return $this->belongsTo('App\Models\Lecturer');
				    }
}
