<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HaziRequest extends FormRequest
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
            'diák' =>'required|min:10',
            'url' =>'required|',
            'jegy' =>'required|numeric|min:1|max:5',
            'ertekeles'=>'required|max:1000',
        ];
    }
}
