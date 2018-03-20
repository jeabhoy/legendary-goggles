<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProfile extends FormRequest
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
        $id = $this->route('id');
        return [
            'profilePicture' =>'image',
            'schoolYear' => 'required',
            'username' =>
                ['required',
                    Rule::unique('users')->ignore($id),],
            'id' =>
                ['required',
                    Rule::unique('users')->ignore($id),],
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
        ];
    }
}
