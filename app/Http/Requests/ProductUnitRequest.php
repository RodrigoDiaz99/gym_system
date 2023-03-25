<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUnitRequest extends FormRequest
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
            'unit_product' => 'required|min:2',
            'unit_value' => 'required|min:2'
        ];
    }

    public function messages()
    {
        return [
            'unit_product.required' => 'El nombre de la unidad de medida es obligatorio',
            'unit_product.min' => 'Se necesitan minimo 2 letras',
            'unit_value.required' => 'La unidad de medida es obligatorio',
            'unit_value.min' => 'La unidad de medida es obligatorio'
        ];
    }
}
