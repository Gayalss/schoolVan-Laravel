<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolVanRoute extends Model
{
	protected $table='school_van_routes';//Not sure whether this is want or not

    public function vanOwnerSchoolVanRoute()
    {
    	return $this->belongsTo('van_owner','vanOwnerEmail'); 

    }
}
