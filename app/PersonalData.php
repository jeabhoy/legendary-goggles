<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalData extends Model
{
  public $incrementing = false;
  public $timestamps = false;
  protected $fillable = [
      'user_id', 'firstName', 'middleName', 'lastName', 'dateOfBirth', 'placeOfBirth', 'age', 'gender', 'civilStatus', 'nationality', 'religion', 'nameOfSpouse', 'spouseOccupation', 'numberOfChildren', 'currentAddressNo', 'currentAddressStreet', 'currentAddressMun', 'currentAddressProv', 'permanentAddressNo', 'permanentAddressStreet', 'permanentAddressMun', 'permanentAddressProv', 'landline', 'cellPhoneNo', 'email', 'doYouWork', 'nameOfFirm', 'addressOfFirm', 'sendsToSchool', 'sendName', 'sendRelation', 'sendOccupation', 'authName', 'authRelationship', 'authContact', 'authPermanentNo', 'authPermanentStreet', 'authPermanentMun', 'authPermanentProv', 'talents', 'curricular1', 'curricular2', 'curricular3',
  ];
  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
