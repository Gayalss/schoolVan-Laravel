<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
	protected $table='childrens';//Not sure whether this is want or not
	
    public function studentParent()
    {
    	return $this->belongsTo('student_parent','studentparentemail'); 

    }
}
