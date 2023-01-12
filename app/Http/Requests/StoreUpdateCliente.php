<?php

namespace App\Http\Requests;

use App\Models\clientes;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule as ValidationRule;

class StoreUpdateCliente extends FormRequest
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
          
            'nome' => ['required','min:3','max:160'],
            'endereco' => ['required','min:5','max:160'],
            'email' => [

                'required',
               

        ],
            'telefone' => ['required','min:8'],
            'tipo' => ['required'],
            'documento' => [

                'required',
               

            ],
        ];
    }
    public function messages()
    {
        return[
        'nome.required' => 'Por favor, Insira um Nome',
        'nome.min' => 'Nome não atingiu letras minimas!',

        'endereco.required' => 'Por favor, Insira um Endereço!',
        'endereco.min' => 'Endereço não atingiu letras minimas!',


        'email.required' => 'Por favor, Insira um E-mail!',
        'email.min' => 'E-mail não atingiu letras minimas!',


        'telefone.required' => 'Por favor, Insira um Telefone!',
        'telefone.min' => 'Telefone não atingiu letras minimas!',


        'tipo.required' => 'Por favor, Selecione um Tipo!',
        'tipo.min' => 'Por favor, Selecione um Tipo!',

        'documento.required' => 'Por favor, Insira um Documento!',
        'documento.unique' => 'Por favor, Insira o seu Documento!',
        'documento.min' => 'Por favor, Insira o seu Documento!',

        ];
    }
}
