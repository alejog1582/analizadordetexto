<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormularioRequest extends FormRequest
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
            'titulo' => 'required',
            'texto' => 'required|max:2048',
        ];
    }
    public function messages() {
		return [
			'titulo.required' => 'El campo Titulo es obligatorio',
			'texto.required' => 'El campo Texto es obligatorio',
			'texto.max' => 'El texto ingresado contiene mas caracteres de lo permitido, por favor ajustar el texto a un maximo de 2.048 caracteres.',
        ];
    }
}
