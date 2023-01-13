<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDids extends FormRequest
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
         'numero' => ['required'],
         'descricao' => ['required'],
         'cliente_id' => ['required'],
        ];
    } public function messages()
    {
        return[
            'numero.required' => 'Campo Obrigatorio',
            'descricao.required' => 'Campo Obrigatorio',
            'cliente_id.required' => 'Campo Obrigatorio'
        ];
    }
}
