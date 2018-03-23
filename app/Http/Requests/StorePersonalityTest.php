<?php

namespace App\Http\Requests;

use App\Rules\NotDefaultValue;
use Illuminate\Foundation\Http\FormRequest;

class StorePersonalityTest extends FormRequest
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
            'section1Row1' => new NotDefaultValue,
            'section2Row1' => new NotDefaultValue,
            'section3Row1' => new NotDefaultValue,
            'section4Row1' => new NotDefaultValue,
            'section1Row2' => new NotDefaultValue,
            'section2Row2' => new NotDefaultValue,
            'section3Row2' => new NotDefaultValue,
            'section4Row2' => new NotDefaultValue,
            'section1Row3' => new NotDefaultValue,
            'section2Row3' => new NotDefaultValue,
            'section3Row3' => new NotDefaultValue,
            'section4Row3' => new NotDefaultValue,
            'section1Row4' => new NotDefaultValue,
            'section2Row4' => new NotDefaultValue,
            'section3Row4' => new NotDefaultValue,
            'section4Row4' => new NotDefaultValue,
            'section1Row5' => new NotDefaultValue,
            'section2Row5' => new NotDefaultValue,
            'section3Row5' => new NotDefaultValue,
            'section4Row5' => new NotDefaultValue,
            'section1Row6' => new NotDefaultValue,
            'section2Row6' => new NotDefaultValue,
            'section3Row6' => new NotDefaultValue,
            'section4Row6' => new NotDefaultValue,
            'section1Row7' => new NotDefaultValue,
            'section2Row7' => new NotDefaultValue,
            'section3Row7' => new NotDefaultValue,
            'section4Row7' => new NotDefaultValue,
            'section1Row8' => new NotDefaultValue,
            'section2Row8' => new NotDefaultValue,
            'section3Row8' => new NotDefaultValue,
            'section4Row8' => new NotDefaultValue,
            'section1Row9' => new NotDefaultValue,
            'section2Row9' => new NotDefaultValue,
            'section3Row9' => new NotDefaultValue,
            'section4Row9' => new NotDefaultValue,
            'section1Row10' => new NotDefaultValue,
            'section2Row10' => new NotDefaultValue,
            'section3Row10' => new NotDefaultValue,
            'section4Row10' => new NotDefaultValue,
            'section1Row11' => new NotDefaultValue,
            'section2Row11' => new NotDefaultValue,
            'section3Row11' => new NotDefaultValue,
            'section4Row11' => new NotDefaultValue,
            'section1Row12' => new NotDefaultValue,
            'section2Row12' => new NotDefaultValue,
            'section3Row12' => new NotDefaultValue,
            'section4Row12' => new NotDefaultValue,
            'section1Row13' => new NotDefaultValue,
            'section2Row13' => new NotDefaultValue,
            'section3Row13' => new NotDefaultValue,
            'section4Row13' => new NotDefaultValue,
            'section1Row14' => new NotDefaultValue,
            'section2Row14' => new NotDefaultValue,
            'section3Row14' => new NotDefaultValue,
            'section4Row14' => new NotDefaultValue,
            'section1Row15' => new NotDefaultValue,
            'section2Row15' => new NotDefaultValue,
            'section3Row15' => new NotDefaultValue,
            'section4Row15' => new NotDefaultValue,
            'section1Row16' => new NotDefaultValue,
            'section2Row16' => new NotDefaultValue,
            'section3Row16' => new NotDefaultValue,
            'section4Row16' => new NotDefaultValue,
            'section1Row17' => new NotDefaultValue,
            'section2Row17' => new NotDefaultValue,
            'section3Row17' => new NotDefaultValue,
            'section4Row17' => new NotDefaultValue,
            'section1Row18' => new NotDefaultValue,
            'section2Row18' => new NotDefaultValue,
            'section3Row18' => new NotDefaultValue,
            'section4Row18' => new NotDefaultValue,
            'section1Row19' => new NotDefaultValue,
            'section2Row19' => new NotDefaultValue,
            'section3Row19' => new NotDefaultValue,
            'section4Row19' => new NotDefaultValue,
            'section1Row20' => new NotDefaultValue,
            'section2Row20' => new NotDefaultValue,
            'section3Row20' => new NotDefaultValue,
            'section4Row20' => new NotDefaultValue,
            'section1Row21' => new NotDefaultValue,
            'section2Row21' => new NotDefaultValue,
            'section3Row21' => new NotDefaultValue,
            'section4Row21' => new NotDefaultValue,
            'section1Row22' => new NotDefaultValue,
            'section2Row22' => new NotDefaultValue,
            'section3Row22' => new NotDefaultValue,
            'section4Row22' => new NotDefaultValue,
            'section1Row23' => new NotDefaultValue,
            'section2Row23' => new NotDefaultValue,
            'section3Row23' => new NotDefaultValue,
            'section4Row23' => new NotDefaultValue,
            'section1Row24' => new NotDefaultValue,
            'section2Row24' => new NotDefaultValue,
            'section3Row24' => new NotDefaultValue,
            'section4Row24' => new NotDefaultValue,
            'section1Row25' => new NotDefaultValue,
            'section2Row25' => new NotDefaultValue,
            'section3Row25' => new NotDefaultValue,
            'section4Row25' => new NotDefaultValue,
            'section1Row26' => new NotDefaultValue,
            'section2Row26' => new NotDefaultValue,
            'section3Row26' => new NotDefaultValue,
            'section4Row26' => new NotDefaultValue,
            'section1Row27' => new NotDefaultValue,
            'section2Row27' => new NotDefaultValue,
            'section3Row27' => new NotDefaultValue,
            'section4Row27' => new NotDefaultValue,
            'section1Row28' => new NotDefaultValue,
            'section2Row28' => new NotDefaultValue,
            'section3Row28' => new NotDefaultValue,
            'section4Row28' => new NotDefaultValue,
            'section1Row29' => new NotDefaultValue,
            'section2Row29' => new NotDefaultValue,
            'section3Row29' => new NotDefaultValue,
            'section4Row29' => new NotDefaultValue,
            'section1Row30' => new NotDefaultValue,
            'section2Row30' => new NotDefaultValue,
            'section3Row30' => new NotDefaultValue,
            'section4Row30' => new NotDefaultValue,
        ];
    }
}
