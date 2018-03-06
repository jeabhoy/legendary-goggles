<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
      'user_id', 'characeteristics', 'concern', 'fatherInter', 'motherInter', 'siblingsInter', 'relativesInter', 'friendsInter', 'describeFather', 'describeMother', 'describeFamily', 'radioStrength', 'radioWeakness', 'decideEnroll', 'otherDecide', 'factorInfluenced', 'otherFactor',
    ];

    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
