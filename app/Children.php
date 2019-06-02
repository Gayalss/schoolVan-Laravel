<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
	protected $table='childrens';//Not sure whether this is want or not
	
    public function studenParent()
    {
    	return $this->belongsTo('StudentParent');
    }
}
