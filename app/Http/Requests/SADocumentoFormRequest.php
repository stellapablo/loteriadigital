<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SADocumentoFormRequest extends FormRequest
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
            'tipo_documento' => 'required',
            'store_id' => 'required',
            'file' => 'required|mimes:pdf'
        ];
    }

    public function messages()
    {
        return [
            'nro_documento.required' => 'Nro de documento es obligatorio',
            'file.required' => 'Debe seleccionar un documento',
            'file.mimes' => 'El documento debe ser en formato PDF'
        ];
    }
}
