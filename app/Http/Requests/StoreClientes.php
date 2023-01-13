<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreClientes extends FormRequest
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
        $id = $this->segment(3);

        return [
           
          
            'nome' => ['required','min:3','max:160'],
            'endereco' => ['required','min:5','max:160'],
            'email' => ['required',Rule::unique('clientes')->ignore($id),'max:30'],
            'telefone' => ['required','min:8','max:15'],
            'tipo' => ['required','max:8'],
            'documento' => ['required',Rule::unique('clientes')->ignore($id),'min:11','max:14'],
        ];
    }
    public function messages()
    {
      

        return[
        'nome.required' => 'Por favor, Insira um Nome',
        'nome.min' => 'Nome não atingiu letras minimas!',

        'endereco.required' => 'Por favor, Insira um Endereço!',
        'endereco.min' => 'Endereço não atingiu letras minimas!',


        'email.required' => 'O campo email é obrigatorio',
            'email.min' => 'O mínimo de digitos permitido é de 10',
            'email.max' => 'O máximo de digitos permitido é de 30',
       


        'telefone.required' => 'Por favor, Insira um Telefone!',
        'telefone.min' => 'Telefone não atingiu letras minimas!',


        'tipo.required' => 'Por favor, Selecione um Tipo!',
        'tipo.max' => 'Por favor, Selecione um Tipo!',

        'documento.required' => 'Por favor, Insira um Documento!',
            'documento.min' => 'Por favor, Insira o seu Documento!',

        ];
    }
}
