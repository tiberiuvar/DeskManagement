<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalariatiStoreRequest extends FormRequest
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
            'Nume'=> ['required'],
            'Prenume' => ['required'], 
            'Email'=> ['required'],
            'Data_de_nastere'=> ['required'],
            'departamentes_id'=> ['required'],
            'birouris_id'=> ['required'],
            'Manager'=>['required'],
        ];
    }
}
