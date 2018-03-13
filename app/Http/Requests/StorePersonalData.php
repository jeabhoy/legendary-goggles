<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StorePersonalData extends FormRequest
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
                'required|
        nullable|sometimes',
            'currentStreetZone' =>
                'required|
                nullable|sometimes',
            'currentMunicipality' =>
                'required|
                nullable|sometimes',
            'currentProvince' =>
                'required|
                nullable|sometimes',
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
                'required|sometimes|
        nullable',
            'authPermStreetZone' =>
                'required|sometimes|
        nullable',
            'authPermMunicipality' =>
                'required|sometimes|
        nullable',
            'authPermProvince' =>
                'required|sometimes|
        nullable',
            'talents' => 'nullable',
            'curricularActivity1' => 'required',
            'curricularActivity2' => 'required',
            'curricularActivity3' => 'required',
        ];
    }
}
