<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonalData;
use App\Http\Requests\UpdatePersonalData;
use App\Http\Requests\UpdateProfile;
use App\PersonalData;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    public function edit($personalDataId, $id)
    {
        $userPersonalData = (new PersonalData)->find($personalDataId);
        $user = (new User)->find($id);
        return view('admin.editStudent.personalData', compact('userPersonalData', 'user'));
    }

    public function update(UpdatePersonalData $request, $id, $personalDataId)
    {
        $userPersonalData = (new PersonalData)->find($personalDataId);
        $userPersonalData->id = $id;
        $userPersonalData->user_id = $id;
        $userPersonalData->firstName = $request->firstName;
        $userPersonalData->middleName = $request->middleName;
        $userPersonalData->lastName = $request->lastName;
        $userPersonalData->dateOfBirth = $request->dateOfBirth;
        $userPersonalData->placeOfBirth = $request->placeOfBirth;
        $userPersonalData->age = $request->age;
        $userPersonalData->gender = $request->gender;
        $userPersonalData->civilStatus = $request->civilStatus;
        $userPersonalData->nationality = $request->nationality;
        $userPersonalData->religion = $request->religion;
        $userPersonalData->nameOfSpouse = $request->nameOfSpouse;
        $userPersonalData->spouseOccupation = $request->spouseOccupation;
        $userPersonalData->numberOfChildren = $request->numberOfChildren;
        $userPersonalData->currentAddressNo = $request->currentNumber;
        $userPersonalData->currentAddressStreet = $request->currentStreetZone;
        $userPersonalData->currentAddressMun = $request->currentMunicipality;
        $userPersonalData->currentAddressProv = $request->currentProvince;
        $userPersonalData->permanentAddressNo = $request->permanentNumber;
        $userPersonalData->permanentAddressStreet = $request->permanentStreetZone;
        $userPersonalData->permanentAddressMun = $request->permanentMunicipality;
        $userPersonalData->permanentAddressProv = $request->permanentProvince;
        $userPersonalData->curricular3 = $request->permanentMunicipality;
        $userPersonalData->permanentAddressProv = $request->permanentProvince;
        $userPersonalData->landline = $request->landline;
        $userPersonalData->cellPhoneNo = $request->cellphoneNumber;
        $userPersonalData->doYouWork = $request->doYouWork;
        $userPersonalData->nameOfFirm = $request->nameOfFirm;
        $userPersonalData->addressOfFirm = $request->addressOfFirm;
        $userPersonalData->sendsToSchool = $request->whoSendsToSchool;
        $userPersonalData->sendName = $request->whoSendsToSchoolName;
        $userPersonalData->sendRelation = $request->whoSendsToSchoolRel;
        $userPersonalData->sendOccupation = $request->whoSendsToSchoolOccu;
        $userPersonalData->authName = $request->authorizeName;
        $userPersonalData->authRelationship = $request->authorizeRelationship;
        $userPersonalData->authContact = $request->authorizeContactNumber;
        $userPersonalData->authPermanentNo = $request->authPermNumber;
        $userPersonalData->authPermanentStreet = $request->authPermStreetZone;
        $userPersonalData->authPermanentMun = $request->authPermMunicipality;
        $userPersonalData->authPermanentProv = $request->authPermProvince;
        $userPersonalData->talents = $request->talentsSkills;
        $userPersonalData->curricular1 = $request->curricularActivity1;
        $userPersonalData->curricular2 = $request->curricularActivity2;
        $userPersonalData->curricular3 = $request->curricularActivity3;
        $userPersonalData->save();
        $user = (new User)->find($id);
        $user->fullName = $request->firstName.' '.$request->middleName.' '.$request->lastName;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('adminEditPersonalData', ['id' => $id, 'personalDataId' => $personalDataId ])->with('status', 'Record successfully Updated');
    }
}
