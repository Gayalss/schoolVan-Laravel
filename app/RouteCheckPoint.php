<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RouteCheckPoint extends Model
{	
	protected $table='school_route_check_points';
	
    public function vanOwnerRouteCheckPoint()
    {
    	return $this->belongsTo('van_owners','vanowneremail'); 

    }
}
