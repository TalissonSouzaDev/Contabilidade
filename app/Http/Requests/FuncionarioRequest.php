<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuncionarioRequest extends FormRequest
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
            'matricula' => "required|max:8|unique:funcionarios,matricula,$id,id",
            'nome' => "required|min:3|max:200",
            'cpf'=> "required|min:12|max:15|unique:funcionarios,cpf,$id,id",
            'rg',
            'dat_nasc',
            'email' => 'nullable|email',
            'telefone'=> "required|min:8|max:13",
            'salario',
            'admissao'=> "required",
            'demissao'
        ];
    }

    
    public function messages(){
        return [ 
          'required'=>'Campos obrigatorio',
          'matricula.unique' => 'ja existir registro com essa matricula',
          'cpf.unique' => 'ja existir registro com esse  CPF',
          'min' => 'o limite de caracter esta abaixo do esperado',
          'max' => 'o limite de caracter atingido'
        ];
    }
}
