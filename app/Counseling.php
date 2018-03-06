<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counseling extends Model
{
	protected $fillable = [
	  'dataSession', 'concern',
	];
	public function user()
	{
	  return $this->belongsTo('App\User');
	}
}

