<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Requestcontato extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'min:2|max:100|required',
            'telefone' => 'min:2|max:13|required',
            'celular' => 'min:2|max:12|required',
            'endereco' => 'min:2|max:100|required',
            'email' => 'min:2|max:100|required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Campo deve ser preenchido',
            'telefone.required' => 'Campo deve ser preenchido',
            'celular.required' => 'Campo deve ser preenchido',
            'endereco.required' => 'Campo deve ser preenchido',
            'email.required' => 'Campo deve ser preenchido',
        ];
    }
}
