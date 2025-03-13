<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearHistorialRequest extends FormRequest
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
            'presupuesto_original'      => ['required', 'numeric', 'regex:/^\d{1,10}(\.\d{1,2})?$/'],
            'presupuesto_convertido'    => ['required', 'numeric', 'regex:/^\d{1,10}(\.\d{1,2})?$/'],
            'tasa_cambio'               => ['required','string','max:15'],
            'clima'                     => ['required','string','max:15'],
            'temperatura'               => ['required','string','max:5'],
            'ciudad_id'                 => ['required','numeric']
        ];
    }
}
