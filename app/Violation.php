<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Violation extends Model
{
 	protected $fillable = [
 	  'offense', 'resolution',
 	];
 	public function user()
 	{
 	  return $this->belongsTo('App\User');
 	}
}
