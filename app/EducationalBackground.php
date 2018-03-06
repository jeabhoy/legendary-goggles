<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationalBackground extends Model
{
  public $incrementing = false;
  public $timestamps = false;
  protected $fillable = [
    'user_id', 'elemNameOfSchool', 'elemAddressOfSchool', 'elemYearsOfAttendance', 'highNameOfSchool', 'highAddressOfSchool', 'highYearsOfAttendance', 'collegeNameOfSchool', 'collegeAddressOfSchool', 'collegeYearsOfAttendance', 'gradNameOfSchool', 'gradAddressOfSchool', 'gradYearsOfAttendance', 'subjectExcel', 'subjectLeast', 'awardsReceived', 'firstPriority', 'secondPriority', 'thirdPriority',
  ];

  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
