<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFamilyBackground extends FormRequest
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
            'physicalProblems' => 'nullable',
            'allergies' => 'nullable',
            'treatmentSought' => 'nullable',
            'medicineTaken' => 'nullable',
        ];
    }
}
