<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEducationalBackground extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'elementaryNameSchool' => 'required',
            'elementaryAddressSchool' => 'required',
            'elementaryYearsAttendance' => 'required',
            'highSchoolNameSchool' => 'required',
            'highSchoolAddressSchool' => 'required',
            'highSchoolYearsAttendance' => 'required',
            'collegeNameSchool' =>
                'required|sometimes|
        nullable',
            'collegeAddressSchool' =>
                'required|sometimes|
        nullable',
            'collegeYearsAttendance' =>
                'required|sometimes|
        nullable',
            'graduateVocationalNameSchool' => 'nullable',
            'graduateVocationalAddressSchool' => 'nullable',
            'graduateVocationalYearsAttendance' => 'nullable',
            'subjectExcel' => 'required',
            'subjectLeastExcel' => 'required',
            'awardsHonorsReceived' => 'nullable',
            'firstPriority' =>
                'required|sometimes|
        nullable',
            'secondPriority' =>
                'required|sometimes|
        nullable',
            'thirdPriority' =>
                'required|sometimes|
        nullable',
        ];
    }
}
