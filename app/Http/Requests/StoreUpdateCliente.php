<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        $id = $this->segment(2);
        
        return [
          
            'nome' => ['required','min:3','max:160'],
            'endereco' => ['required','min:5','max:160'],
            'email' => ['required','max:160'],
            'telefone' => ['required','min:8'],
            'tipo' => ['required'],
            'documento' => ['required', 'min:11',"unique:clientes,documento,{$id},id"],
        ];
    }
    public function messages()
    {
        return[
        'nome' => 'Por favor, Insira um Nome',
        'endereco' => 'Por favor, Insira um Endereço!',
        'email' => 'Por favor, Insira um E-mail!',
        'telefone' => 'Por favor, Insira um Telefone!',
        'tipo' => 'Por favor, Selecione um Tipo!',
        'documento' => 'Por favor, Insira o seu Documento!',
        ];
    }
}
