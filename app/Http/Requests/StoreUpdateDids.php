<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateDids extends FormRequest
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
            'numero' => 'ERRO',
            'descricao' => 'ERRO',
        ];
    }
}
