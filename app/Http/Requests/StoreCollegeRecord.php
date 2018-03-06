<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCollegeRecord extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'profilePicture' =>'image',
          'semester' => 'required',
          'schoolYear' => 'required',
          'studentNo' => 'required|unique:users',
          'course' => 'required',
          'firstName' => 'required',
          'middleName' => 'required',
          'lastName' => 'required',
          'dateOfBirth' => 'required',
          'placeOfBirth' => 'required',
          'age' => 'required',
          'gender' => 'required',
          'civilStatus' => 'required',
          'nationality' => 'required',
          'religion' => 'required',
          'nameOfSpouse' => 'required_if:civilStatus,Married',
          'spouseOccupation' => 'required_if:civilStatus,Married',
          'numberOfChildren' => 'required_if:civilStatus,Married',
          'currentNumber' => 'required',
          'currentStreeZone' => 'required',
          'currentMunicipality' => 'required',
          'currentProvince' => 'required',
          'permanentNumber' => 'required',
          'permanentStreeZone' => 'required',
          'permanentMunicipality' => 'required',
          'permanentProvince' => 'required',
          'landline' => 'nullable',
          'cellphoneNumber' => 'nullable',
          'email' => 'required',
          'doYouWork' => 'required',
          'nameOfFirm' => 'required_if:doYouWork,Yes',
          'addressOfFirm' => 'required_if:doYouWork,Yes',
          'whoSendsToSchool' => 'required',
          'whoSendsToSchoolName' => 'required_if:whoSendsToSchool,Others',
          'whoSendsToSchoolRel' => 'required_if:whoSendsToSchool,Others',
          'whoSendsToSchoolOccu' => 'required_if:whoSendsToSchool,Others',
          'authorizeName' => 'required',
          'authorizeRelationship' => 'required',
          'authorizeContactNumber' => 'required',
          'authPermNumber' => 'required',
          'authPermStreetZone' => 'required',
          'authPermMunicipality' => 'required',
          'authPermProvince' => 'required',
          'talents' => 'nullable',
          'curricularActivity1' => 'required',
          'curricularActivity2' => 'required',
          'curricularActivity3' => 'required',
          'fatherName' => 'required',
          'fatherDeceased' => 'nullable',
          'fatherOccupation' => 'required_if:fatherDeceased,True',
          'fatherContactNumber' => 'required_if:fatherDeceased,True',
          'motherName' => 'required',
          'motherDeceased' => 'nullable',
          'motherOccupation' => 'required_if:motherDeceased,True',
          'motherContactNumber' => 'required_if:motherDeceased,True',
          'sibling1Name' => 'required_with:sibling1Age,sibling1EducationalLevel|nullable',
          'sibling1Age' => 'required_with:sibling1Name,sibling1EducationalLevel|nullable',
          'sibling1EducationalLevel' => 'required_with:sibling1Name,sibling1Age|nullable',
          'sibling2Name' => 'required_with:sibling2Age,sibling2EducationalLevel|nullable',
          'sibling2Age' => 'required_with:sibling2Name,sibling2EducationalLevel|nullable',
          'sibling2EducationalLevel' => 'required_with:sibling2Name,sibling2Age|nullable',
          'sibling3Name' => 'required_with:sibling3Age,sibling3EducationalLevel|nullable',
          'sibling3Age' => 'required_with:sibling3Name,sibling3EducationalLevel|nullable',
          'sibling3EducationalLevel' => 'required_with:sibling3Name,sibling3Age|nullable',
          'sibling4Name' => 'required_with:sibling4Age,sibling4EducationalLevel|nullable',
          'sibling4Age' => 'required_with:sibling4Name,sibling4EducationalLevel|nullable',
          'sibling4EducationalLevel' => 'required_with:sibling4Name,sibling4Age|nullable',
          'physicalProblems' => 'nullable',
          'allergies' => 'nullable',
          'treatmentSought' => 'nullable',
          'medicineTaken' => 'nullable',
          'elementaryNameSchool' => 'required',
          'elememtaryAddressSchool' => 'required',
          'elememtaryYearsAttendance' => 'required',
          'highSchoolNameSchool' => 'required',
          'highSchoolAddressSchool' => 'required',
          'highSchoolYearsAttendance' => 'required',
          'collegeNameSchool' => 'required',
          'collegeAddressSchool' => 'required',
          'collegeYearsAttendance' => 'required',
          'graduateVocationalNameSchool' => 'nullable',
          'graduateVocationalAddressSchool' => 'nullable',
          'graduateVocationalYearsAttendance' => 'nullable',
          'subjectExcel' => 'required',
          'subjectLeastExcel' => 'required',
          'awardsHonorsReceived' => 'nullable',
          'firstPriority' => 'required',
          'secondPriority' => 'required',
          'thirdPriority' => 'required',
          'characeteristics' => 'required',
          'concern' => 'required',
          'fatherInterpersonal' => 'required',
          'motherInterpersonal' => 'required',
          'siblingsInterpersonal' => 'required',
          'relativesInterpersonal' => 'required',
          'friendsInterpersonal' => 'required',
          'describeFather' => 'required|size:250',
          'describeMother' => 'required|size:250',
          'describeFamily' => 'required|size:250',
          'strength' => 'required',
          'weakness' => 'required',
          'decideToEnroll' => 'required',
          'decideToEnrollOthers' => 'required_if:decideEnroll,Others',
          'factorInfluenced' => 'required',
          'factorInfluencedOthers' => 'required_if:factorInfluenced,Others',
        ];
    }
}
