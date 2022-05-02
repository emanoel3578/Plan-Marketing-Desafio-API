<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListProductsRequest extends FormRequest
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
            'itemsPerPage' => 'required|int',
            'offset' => 'required|int'
        ];
    }

    public function messages()
    {
        return [
            'itemsPerPage.required' => 'O campo itemsPerPage não está presente na sua requisição, por favor tente novamente.',
            'itemsPerPage.int' => 'O campo itemsPerPage não é do formate inteiro, por favor tente novamente.',
            'offset.required' => 'O campo offset não está presente na sua requisição, por favor tente novamente.',
            'offset.int' => 'O campo offset não é do formate inteiro, por favor tente novamente.'
        ];
    }
}
