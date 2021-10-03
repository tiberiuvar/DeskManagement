<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalariiStoreRequest extends FormRequest
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
            'Salariati_id' => ['required', 'exists:salariatis,id' ],
            'Salariu_brut' => ['required'],
            'Luna' => ['required', 'integer', 'between:1,12'],
            'An' => ['required', 'max:4',  'min:4'],
        ];
    }
}
