<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRamais extends FormRequest
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
             'ramal' => ['required'],
             'nome_ramal' => ['required'],
             'tipo' => ['required'],
             'bina' => ['required'],
             'cliente_id' => ['required'],
         ];
     }
     public function messages(){
         return [
             'ramal.required'=>'Campo obrigatorio',
             'nome_ramal.required'=>'Campo obrigatorio',
             'tipo.required'=>'Campo obrigatorio',
             'bina.required'=>'Campo obrigatorio',
             'cliente_id.required'=>'Campo obrigatorio'
 
             
         ];
     }
}
