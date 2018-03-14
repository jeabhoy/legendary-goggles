<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonalData;
use App\PersonalData;
use App\User;
use Illuminate\Http\Request;

class PersonalDataController extends Controller
{
	public function create($id)
	{
	    $user = (new User)->find($id);
		return view('admin.createStudent.createStudentPersonalData', compact('user'));
	}

	public function store(StorePersonalData $request, $id)
    {
        $personalData = new PersonalData;
        $personalData->id = $id;
        $personalData->user_id = $id;
        $personalData->firstName = $request->firstName;
        $personalData->middleName = $request->middleName;
        $personalData->lastName = $request->lastName;
        $personalData->dateOfBirth = $request->dateOfBirth;
        $personalData->placeOfBirth = $request->placeOfBirth;
        $personalData->age = $request->age;
        $personalData->gender = $request->gender;
        $personalData->civilStatus = $request->civilStatus;
        $personalData->nationality = $request->nationality;
        $personalData->religion = $request->religion;
        $personalData->nameOfSpouse = $request->nameOfSpouse;
        $personalData->spouseOccupation = $request->spouseOccupation;
        $personalData->numberOfChildren = $request->numberOfChildren;
        $personalData->currentAddressNo = $request->currentNumber;
        $personalData->currentAddressStreet = $request->currentStreetZone;
        $personalData->currentAddressMun = $request->currentMunicipality;
        $personalData->currentAddressProv = $request->currentProvince;
        $personalData->permanentAddressNo = $request->permanentNumber;
        $personalData->permanentAddressStreet = $request->permanentStreetZone;
        $personalData->permanentAddressMun = $request->permanentMunicipality;
        $personalData->permanentAddressProv = $request->permanentProvince;
        $personalData->curricular3 = $request->permanentMunicipality;
        $personalData->permanentAddressProv = $request->permanentProvince;
        $personalData->landline = $request->landline;
        $personalData->cellPhoneNo = $request->cellphoneNumber;
        $personalData->doYouWork = $request->doYouWork;
        $personalData->nameOfFirm = $request->nameOfFirm;
        $personalData->addressOfFirm = $request->addressOfFirm;
        $personalData->sendsToSchool = $request->whoSendsToSchool;
        $personalData->sendName = $request->whoSendsToSchoolName;
        $personalData->sendRelation = $request->whoSendsToSchoolRel;
        $personalData->sendOccupation = $request->whoSendsToSchoolOccu;
        $personalData->authName = $request->authorizeName;
        $personalData->authRelationship = $request->authorizeRelationship;
        $personalData->authContact = $request->authorizeContactNumber;
        $personalData->authPermanentNo = $request->authPermNumber;
        $personalData->authPermanentStreet = $request->authPermStreetZone;
        $personalData->authPermanentMun = $request->authPermMunicipality;
        $personalData->authPermanentProv = $request->authPermProvince;
        $personalData->talents = $request->talentsSkills;
        $personalData->curricular1 = $request->curricularActivity1;
        $personalData->curricular2 = $request->curricularActivity2;
        $personalData->curricular3 = $request->curricularActivity3;
        $personalData->save();
        $user = (new User)->find($id);
        $user->fullName = $request->firstName.' '.$request->middleName.' '.$request->lastName;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('adminCreateStudentFamilyBackground', ['id' => $id]);
    }
}
