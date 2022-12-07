<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
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
        $id = $this->segment(4);
  
        return [
            'nome'=>'required|min:2|max:100',
            'cnpj'=>"required|min:10|max:30|unique:empresas,cnpj,$id,id",
            'email'=>"required|email|min:10|max:100",
            'telefone'=>"required|min:2|max:11",
        ];
    }

    public function messages(){
        return [ 
          'required'=>'Campos obrigatorio',
          'cnpj.unique' => 'ja existir registro com esse CNPJ',
          'min' => 'o limite de caracter esta abaixo do esperado',
          'max' => 'o limite de caracter atingido'
        ];
    }
}
