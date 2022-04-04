<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicamentosEditRequest extends FormRequest
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
            'Código' => ['required','unique:medicamentos,Código,' . request()->route('medicamento')->id],
            'Nombre' => 'required|min:4|max:20',
            'Categorías' => 'required|min:1|max:20',
            'estado' => 'nullable'

        ];
           
    
    }
}
