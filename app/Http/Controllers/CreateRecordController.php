<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\PersonalData;
use App\Interview;
use App\FamilyBackground;
use App\EducationalBackground;
use App\Http\Requests;

class CreateRecordController extends Controller
{
  public function store(Request $request)
  {
    $request->validate([
      'profilePicture' =>'image',
      'schoolYear' => 'required',
      'studentNo' =>
        'required|
        unique:users,id',
      'course' =>
        'required_if:level,College|
        nullable',
      'strand' =>
        'required_if:level,Grade 11|
        required_if:level,Grade 12|
        nullable',
      'year' =>
        'required_if:level,Grade 10|
        required_if:level,Grade 9|
        required_if:level,Grade 8|
        required_if:level,Grade 7|
        nullable',
      'section' =>
        'required_if:level,Grade 10|
        required_if:level,Grade 9|
        required_if:level,Grade 8|
        required_if:level,Grade 7|
        nullable',
      'firstName' => 'required',
      'middleName' => 'required',
      'lastName' => 'required',
      'dateOfBirth' => 'required',
      'placeOfBirth' => 'required',
      'age' => 'required',
      'nationality' => 'required',
      'religion' => 'required',
      'nameOfSpouse' =>
        'required_if:civilStatus,Married|
        nullable',
      'spouseOccupation' =>
        'required_if:civilStatus,Married|
        nullable',
      'numberOfChildren' =>
        'required_if:civilStatus,Married|
        nullable',
      'currentNumber' =>
        'required_if:level,Grade 11|
        required_if:level,Grade 12|
        required_if:level,Grade 10|
        required_if:level,Grade 9|
        required_if:level,Grade 8|
        required_if:level,Grade 7|
        required_if:level,College|
        nullable',
      'currentStreetZone' =>
        'required_if:level,Grade 11|
        required_if:level,Grade 12|
        required_if:level,Grade 10|
        required_if:level,Grade 9|
        required_if:level,Grade 8|
        required_if:level,Grade 7|
        required_if:level,College|
        nullable',
      'currentMunicipality' =>
        'required_if:level,Grade 11|
        required_if:level,Grade 12|
        required_if:level,Grade 10|
        required_if:level,Grade 9|
        required_if:level,Grade 8|
        required_if:level,Grade 7|
        required_if:level,College|
        nullable',
      'currentProvince' =>
        'required_if:level,Grade 11|
        required_if:level,Grade 12|
        required_if:level,Grade 10|
        required_if:level,Grade 9|
        required_if:level,Grade 8|
        required_if:level,Grade 7|
        required_if:level,College|
        nullable',
      'permanentNumber' => 'required',
      'permanentStreetZone' => 'required',
      'permanentMunicipality' => 'required',
      'permanentProvince' => 'required',
      'landline' => 'nullable',
      'cellphoneNumber' => 'nullable',
      'email' =>
        'required|
        email|
        unique:users,email',
      'nameOfFirm' =>
        'required_if:doYouWork,Yes|
        nullable',
      'addressOfFirm' =>
        'required_if:doYouWork,Yes|
        nullable',
      'whoSendsToSchoolName' =>
        'required_if:whoSendsToSchool,Others|
        nullable',
      'whoSendsToSchoolRel' =>
        'required_if:whoSendsToSchool,Others|
        nullable',
      'whoSendsToSchoolOccu' =>
        'required_if:whoSendsToSchool,Others|
        nullable',
      'authorizeName' => 'required',
      'authorizeRelationship' => 'required',
      'authorizeContactNumber' => 'required',
      'authPermNumber' =>
        'required_if:level,Grade 11|
        required_if:level,Grade 12|
        required_if:level,Grade 10|
        required_if:level,Grade 9|
        required_if:level,Grade 8|
        required_if:level,Grade 7|
        required_if:level,College|
        nullable',
      'authPermStreetZone' =>
        'required_if:level,Grade 11|
        required_if:level,Grade 12|
        required_if:level,Grade 10|
        required_if:level,Grade 9|
        required_if:level,Grade 8|
        required_if:level,Grade 7|
        required_if:level,College|
        nullable',
      'authPermMunicipality' =>
        'required_if:level,Grade 11|
        required_if:level,Grade 12|
        required_if:level,Grade 10|
        required_if:level,Grade 9|
        required_if:level,Grade 8|
        required_if:level,Grade 7|
        required_if:level,College|
        nullable',
      'authPermProvince' =>
        'required_if:level,Grade 11|
        required_if:level,Grade 12|
        required_if:level,Grade 10|
        required_if:level,Grade 9|
        required_if:level,Grade 8|
        required_if:level,Grade 7|
        required_if:level,College|
        nullable',
      'talents' => 'nullable',
      'curricularActivity1' => 'required',
      'curricularActivity2' => 'required',
      'curricularActivity3' => 'required',
      'fatherName' => 'required',
      'fatherDeceased' => 'nullable',
      'fatherOccupation' =>
        'required_if:fatherDeceased, True|
        nullable',
      'fatherContactNumber' =>
        'required_if:fatherDeceased, True|
        nullable',
      'motherName' => 'required',
      'motherDeceased' => 'nullable',
      'motherOccupation' =>
        'required_if:motherDeceased, True|
        nullable',
      'motherContactNumber' =>
        'required_if:motherDeceased, True|
        nullable',
      'sibling1Name' =>
        'required_with:sibling1Age,sibling1EducationalLevel|
        nullable',
      'sibling1Age' =>
        'required_with:sibling1Name,sibling1EducationalLevel|
        nullable',
      'sibling1EducationalLevel' =>
        'required_with:sibling1Name,sibling1Age|
        nullable',
      'sibling2Name' =>
        'required_with:sibling2Age,sibling2EducationalLevel|
        nullable',
      'sibling2Age' =>
        'required_with:sibling2Name,sibling2EducationalLevel|
        nullable',
      'sibling2EducationalLevel' =>
        'required_with:sibling2Name,sibling2Age|
        nullable',
      'sibling3Name' =>
        'required_with:sibling3Age,sibling3EducationalLevel|
        nullable',
      'sibling3Age' =>
        'required_with:sibling3Name,sibling3EducationalLevel|
        nullable',
      'sibling3EducationalLevel' =>
        'required_with:sibling3Name,sibling3Age|
        nullable',
      'sibling4Name' =>
        'required_with:sibling4Age,sibling4EducationalLevel|
        nullable',
      'sibling4Age' =>
        'required_with:sibling4Name,sibling4EducationalLevel|
        nullable',
      'sibling4EducationalLevel' =>
        'required_with:sibling4Name,sibling4Age|
        nullable',
      'physicalProblems' => 'nullable',
      'allergies' => 'nullable',
      'treatmentSought' => 'nullable',
      'medicineTaken' => 'nullable',
      'elementaryNameSchool' => 'required',
      'elementaryAddressSchool' => 'required',
      'elementaryYearsAttendance' => 'required',
      'highSchoolNameSchool' => 'required',
      'highSchoolAddressSchool' => 'required',
      'highSchoolYearsAttendance' => 'required',
      'collegeNameSchool' =>
        'required_if:level,Grade 11|
        required_if:level,Grade 12|
        required_if:level,Grade 10|
        required_if:level,Grade 9|
        required_if:level,Grade 8|
        required_if:level,Grade 7|
        required_if:level,College|
        nullable',
      'collegeAddressSchool' =>
        'required_if:level,Grade 11|
        required_if:level,Grade 12|
        required_if:level,Grade 10|
        required_if:level,Grade 9|
        required_if:level,Grade 8|
        required_if:level,Grade 7|
        required_if:level,College|
        nullable',
      'collegeYearsAttendance' =>
        'required_if:level,Grade 11|
        required_if:level,Grade 12|
        required_if:level,Grade 10|
        required_if:level,Grade 9|
        required_if:level,Grade 8|
        required_if:level,Grade 7|
        required_if:level,College|
        nullable',
      'graduateVocationalNameSchool' => 'nullable',
      'graduateVocationalAddressSchool' => 'nullable',
      'graduateVocationalYearsAttendance' => 'nullable',
      'subjectExcel' => 'required',
      'subjectLeastExcel' => 'required',
      'awardsHonorsReceived' => 'nullable',
      'firstPriority' =>
        'required_if:level,Grade 11|
        required_if:level,Grade 12|
        required_if:level,Grade 10|
        required_if:level,Grade 9|
        required_if:level,Grade 8|
        required_if:level,Grade 7|
        required_if:level,College|
        nullable',
      'secondPriority' =>
        'required_if:level,Grade 11|
        required_if:level,Grade 12|
        required_if:level,Grade 10|
        required_if:level,Grade 9|
        required_if:level,Grade 8|
        required_if:level,Grade 7|
        required_if:level,College|
        nullable',
      'thirdPriority' =>
        'required_if:level,Grade 11|
        required_if:level,Grade 12|
        required_if:level,Grade 10|
        required_if:level,Grade 9|
        required_if:level,Grade 8|
        required_if:level,Grade 7|
        required_if:level,College|
        nullable',
      'characteristics' =>
        'required_if:level,Grade 11|
        required_if:level,Grade 12|
        required_if:level,Grade 10|
        required_if:level,Grade 9|
        required_if:level,Grade 8|
        required_if:level,Grade 7|
        required_if:level,College|
        nullable',
      'concern' =>
        'required_if:level,Grade 11|
        required_if:level,Grade 12|
        required_if:level,Grade 10|
        required_if:level,Grade 9|
        required_if:level,Grade 8|
        required_if:level,Grade 7|
        required_if:level,College|
        nullable',
      'describeFather' =>
        'required|
        min:15',
      'describeMother' =>
        'required|
        min:15',
      'describeFamily' =>
        'required|
        min:15',
      'decideToEnrollOthers' =>
        'required_if:decideEnroll,Others|
        nullable',
      'factorInfluencedOthers' =>
        'required_if:factorInfluenced,Others|
        nullable',
    ]);
    $user = new User;
    $user->level = $request->level;
    $user->semester = $request->semester;
    $user->schoolYear = $request->schoolYear;
    $user->id = $request->studentNo;
    $user->course = $request->course;
    $user->strand = $request->strand;
    $user->year = $request->year;
    $user->section = $request->section;
    $user->username = $request->studentNo;
    $user->password = Hash::make($request->studentNo);
    $user->email = $request->email;
    $user->exitInterviewTaken = 'False';
    $user->fullName = $request->firstName.' '.$request->middleName.' '.$request->lastName;
    $user->save();
    $personalData = new PersonalData;
    $personalData->id = $request->studentNo;
    $personalData->user_id = $request->studentNo;
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
    $personalData->talents = $request->talents;
    $personalData->curricular1 = $request->curricularActivity1;
    $personalData->curricular2 = $request->curricularActivity2;
    $personalData->curricular3 = $request->curricularActivity3;
    $personalData->save();
    $familyBackground = new FamilyBackground;
    $familyBackground->id = $request->studentNo;
    $familyBackground->user_id = $request->studentNo;
    $familyBackground->fatherName = $request->fatherName;
    $familyBackground->fatherDeceased = $request->fatherDeceased;
    $familyBackground->fatherOccupation = $request->fatherOccupation;
    $familyBackground->fatherContactNo = $request->fatherContactNumber;
    $familyBackground->motherName = $request->motherName;
    $familyBackground->motherDeceased = $request->motherDeceased;
    $familyBackground->motherOccupation = $request->motherOccupation;
    $familyBackground->motherContactNo = $request->motherContactNumber;
    $familyBackground->sibling1 = $request->sibling1Name;
    $familyBackground->sibling1Age = $request->sibling1Age;
    $familyBackground->sibling1EducationLevel = $request->sibling1EducationalLevel;
    $familyBackground->sibling2 = $request->sibling2Name;
    $familyBackground->sibling2Age = $request->sibling2Age;
    $familyBackground->sibling2EducationLevel = $request->sibling2EducationalLevel;
    $familyBackground->sibling3 = $request->sibling3Name;
    $familyBackground->sibling3Age = $request->sibling3Age;
    $familyBackground->sibling3EducationLevel = $request->sibling3EducationalLevel;
    $familyBackground->sibling4 = $request->sibling4Name;
    $familyBackground->sibling4Age = $request->sibling4Age;
    $familyBackground->sibling4EducationLevel = $request->sibling4EducationalLevel;
    $familyBackground->physicalProblems = $request->physicalProblems;
    $familyBackground->allergies = $request->allergies;
    $familyBackground->treatmentSought = $request->treatmentSought;
    $familyBackground->medicineTaken = $request->medicineTaken;
    $familyBackground->save();
    $educationalBackground = new EducationalBackground;
    $educationalBackground->id = $request->studentNo;
    $educationalBackground->user_id = $request->studentNo;
    $educationalBackground->elemNameOfSchool = $request->elementaryNameSchool;
    $educationalBackground->elemAddressOfSchool = $request->elementaryAddressSchool;
    $educationalBackground->elemYearsOfAttendance = $request->elementaryYearsAttendance;
    $educationalBackground->highNameOfSchool = $request->highSchoolNameSchool;
    $educationalBackground->highAddressOfSchool = $request->highSchoolAddressSchool;
    $educationalBackground->highYearsOfAttendance = $request->highSchoolYearsAttendance;
    $educationalBackground->collegeNameOfSchool = $request->collegeNameSchool;
    $educationalBackground->collegeAddressOfSchool = $request->collegeAddressSchool;
    $educationalBackground->collegeYearsOfAttendance = $request->collegeYearsAttendance;
    $educationalBackground->gradNameOfSchool = $request->graduateVocationalNameSchool;
    $educationalBackground->gradAddressOfSchool = $request->graduateVocationalAddressSchool;
    $educationalBackground->gradYearsOfAttendance = $request->graduateVocationalYearsAttendance;
    $educationalBackground->subjectExcel = $request->subjectExcel;
    $educationalBackground->subjectLeast = $request->subjectLeastExcel;
    $educationalBackground->awardsReceived = $request->awardsHonorsReceived;
    $educationalBackground->firstPriority = $request->firstPriority;
    $educationalBackground->secondPriority = $request->secondPriority;
    $educationalBackground->thirdPriority = $request->thirdPriority;
    $educationalBackground->save();
    $interview = new Interview;
    $interview->id = $request->studentNo;
    $interview->user_id = $request->studentNo;
    $interview->characteristics = $request->characteristics;
    $interview->concern = $request->concern;
    $interview->fatherInter = $request->fatherInterpersonal;
    $interview->motherInter = $request->motherInterpersonal;
    $interview->siblingsInter = $request->siblingsInterpersonal;
    $interview->relativesInter = $request->relativesInterpersonal;
    $interview->friendsInter = $request->friendsInterpersonal;
    $interview->describeFather = $request->describeFather;
    $interview->describeMother = $request->describeMother;
    $interview->describeFamily = $request->describeFamily;
    $interview->radioStrength = $request->strength;
    $interview->radioWeakness = $request->weakness;
    $interview->decideEnroll = $request->decideToEnroll;
    $interview->otherDecide = $request->decideToEnrollOthers;
    $interview->factorInfluenced = $request->factorInfluenced;
    $interview->otherFactor = $request->factorInfluencedOthers;
    $interview->save();
    if ($request->hasFile('profilePicture'))
    {
      $extension = $request->profilePicture->extension();
      $user->avatar = $request->studentNo.'.'.$extension;
      $user->save();
      Storage::putFileAs('public', $request->file('profilePicture'), $request->studentNo.'.'.$extension);
    }
    else {
      $user->avatar = 'defaultAvatar.png';
      $user->save();
    }
    return redirect()->route('adminManageStudentIndex')->with('status', 'Record successfully added!');
  }

  public function store2(Request $request)
  {
    $request->validate([
      'id' =>
        'required|
        unique:users,id',
    ]);
    $user = new User;
    $user->id = $request->id;
    $user->level = $request->level;
    $user->username = $request->id;
    $user->password = Hash::make($request->id);
    $user->exitInterviewTaken = 'false';
    $user->save();
      $userEducationalBackground = new EducationalBackground;
      $userEducationalBackground->id = $request->id;
      $userEducationalBackground->user_id = $request->id;
      $userEducationalBackground->save();
      $userFamilyBackground = new FamilyBackground;
      $userFamilyBackground->id = $request->id;
      $userFamilyBackground->user_id = $request->id;
      $userFamilyBackground->save();
      $userPersonalData = new PersonalData;
      $userPersonalData->id = $request->id;
      $userPersonalData->user_id = $request->id;
      $userPersonalData->save();
      $userInterview = new Interview;
      $userInterview->id = $request->id;
      $userInterview->user_id = $request->id;
      $userInterview->save();
    return redirect()->route('adminManageStudentIndex')->with('status', 'Record successfully added!');
  }
}
