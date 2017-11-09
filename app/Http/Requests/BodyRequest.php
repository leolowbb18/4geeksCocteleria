<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BodyRequest extends FormRequest
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
        'id_factura' => 'required', 
        'id_producto' => 'required', 
        'cantidad' => 'required', 
        'existencia' => 'required', 
        'precio' => 'required', 
        ];
    }
}
