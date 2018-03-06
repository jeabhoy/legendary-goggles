<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyBackground extends Model
{
  public $incrementing = false;
  public $timestamps = false;
  protected $fillable = [
      'user_id', 'fatherName', 'fatherDeceased', 'fatherOccupation', 'fatherContactNo', 'motherName', 'motherDeceased', 'motherOccupation', 'motherContactNo', 'sibling1', 'sibling1Age', 'sibling1EducationLevel', 'sibling2', 'sibling2Age', 'sibling2EducationLevel', 'sibling3', 'sibling3Age', 'sibling3EducationLevel', 'sibling4', 'sibling4Age', 'sibling4EducationLevel', 'physicalProblems', 'allergies', 'treatmentSought', 'medicineTaken',
  ];

  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
