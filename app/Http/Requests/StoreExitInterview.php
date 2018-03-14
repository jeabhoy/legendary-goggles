<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExitInterview extends FormRequest
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
            'attracted' =>
                'required|
			min:15',
            'chooseToStudy' =>
                'required|
			min:15',
            'bestPartsOfPUNP' =>
                'required|
			min:15',
            'worstPartsOfPUNP' =>
                'required|
			min:15',
            'favoriteSubject' =>
                'required|
			min:15',
            'leastFavoriteSubject' =>
                'required|
			min:15',
            'likeBest' =>
                'required|
			min:15',
            'likeLeast' =>
                'required|
			min:15',
            'workWhileSchool' =>
                'required',
            'changesYouSuggest' =>
                'required|
			min:15',
            'bestInstructor' =>
                'required|
			min:15',
            'leastInstructor' =>
                'required|
			min:15',
            'immediatePlans' =>
                'required|
			min:15',
            'review' =>
                'required|
			min:15',
            'choosePUNP' =>
                'required|
			min:15',
            'comments' =>
                'required|
			min:15',
            'otherComments' =>
                'required|
			min:15',
        ];
    }
}
