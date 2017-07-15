<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SADocumentoEditFormRequest extends FormRequest
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
            'nro_documento' => 'required',
            'tomo' => 'required',
            'fecha_documento' => 'required|date',
            'tipo_documento' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
            'store_id' => 'required',
        ];
    }
}
