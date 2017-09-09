<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalFormRequest extends FormRequest
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
            'dni' => 'required|numeric|unique:personal,dni',
            'lugar' => 'required',
            'nombre' => 'required|regex:/^[\s\w-]*$/',
            'apellido' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'dni.required' => 'Nro de DNI es obligatorio',
            'lugar.required' => 'El lugar es obligatorio',
            'nombre.required' => 'El nombre es obligatorio',
            'apellido.required' => 'El apellido es obligatorio'

        ];
    }
}
