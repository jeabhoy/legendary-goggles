<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $incrementing = false;

    protected $fillable = [
        'username', 'password', 'level', 'semester', 'schoolYear', 'year', 'id', 'section', 'strand', 'course', 'fullName'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function personalData()
    {
      return $this->hasOne('App\PersonalData');
    }

    public function interview()
    {
      return $this->hasOne('App\Interview');
    }

    public function familyBackground()
    {
      return $this->hasOne('App\FamilyBackground');
    }

    public function educationalBackground()
    {
      return $this->hasOne('App\EducationalBackground');
    }
    public function counseling()
    {
      return $this->hasMany('App\Counseling');
    }

    public function violation()
    {
      return $this->hasMany('App\Violation');
    }

    public function exitInterview()
    {
      return $this->hasOne('App\ExitInterview');
    }

    public function sibling()
    {
        return $this->hasMany('App\Sibling');
    }

    public function personalityTest()
    {
        return $this->hasOne('App\PersonalityTest');
    }
}
