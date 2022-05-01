<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:150',
            'description' => 'required|string|min:3|max:255',
            'tension' => 'required|string|min:2|max:10',
            'brand' => 'required|string|in:Electrolux,Brastemp,Fischer,Samsung,LG'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório, por favor verifique o campo novamente',
            'name.string' => 'O campo nome precisa ser no formato texto, por favor verifique o campo novamente',
            'name.min' => 'O campo nome requer no mínimo 3 caracteres, por favor verifique o campo novamente',
            'name.max' => 'O campo nome requer no máximo 150 caracteres, por favor verifique o campo novamente',
            'description.required' => 'O campo descrição é obrigatório, por favor verifique o campo novamente',
            'description.string' => 'O campo descrição precisa ser no formato texto, por favor verifique o campo novamente',
            'description.min' => 'O campo descrição requer no mínimo 3 caracteres, por favor verifique o campo novamente',
            'description.max' => 'O campo descrição requer no máximo 255 caracteres, por favor verifique o campo novamente',
            'tension.required' => 'O campo tensão é obrigatório, por favor verifique o campo novamente',
            'tension.string' => 'O campo tensão precisa ser no formato texto, por favor verifique o campo novamente',
            'tension.min' => 'O campo tensão requer no mínimo 3 caracteres, por favor verifique o campo novamente',
            'tension.max' => 'O campo tensão requer no máximo 10 caracteres, por favor verifique o campo novamente',
            'brand.required' => 'O campo marca é obrigatório, por favor verifique o campo novamente',
            'brand.string' => 'O campo marca precisa ser no formato texto, por favor verifique o campo novamente',
            'brand.in' => "O campo marca precisar ser algum dos valores 'Electrolux, Brastemp, Fischer, Samsung, LG' , por favor verifique o campo novamente",
        ];
    }
}
