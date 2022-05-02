<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class deleteRequest extends FormRequest
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
            'id' => 'required|int'
        ];
    }

    public function messages()
    {
        return [
            'id.required' => 'O campo id é obrigário para a remoção do produto, verifique o campo novamente',
            'id.int' => 'O campo id não é do formato inteiro, verifique o campo novamente'
        ];
    }
}
