<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table='vehicles';//Not sure whether this is want or not
	
    public function studentParent()
    {
    	return $this->belongsTo('vanOwner');
    }
}
