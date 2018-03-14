<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExitInterview extends Model
{
    public $incrementing = false;
    public $timestamps = false;
	public function user()
	{
	  return $this->belongsTo('App\User');
	}
}
