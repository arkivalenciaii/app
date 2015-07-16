<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    protected $table = 'slots';

    function slotExit()
    {
    	if ($this->hasLeft() == '2' && $this->hasRight == 2)
    	{
    		return $this->exit == true;
    	}
    }

    function user()
    {
    	return $this->belongsTo('App\User');
    }
}
