<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RouteSchool extends Model
{	
	protected $table='routes_schools';
    
    public function vanOwnerRouteSchool()
    {
    	return $this->belongsTo('van_owners','vanowneremail'); 

    }
    
}
