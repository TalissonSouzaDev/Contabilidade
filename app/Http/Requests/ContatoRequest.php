<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatoRequest extends FormRequest
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
      'nome' =>"required",
      'telefone'=>'required',
      'descricao'=>"nullable",
      'email' => "nullable|email",
        ];
    }


    public function messages(){
        return [ 
          'required'=>'Campos obrigatorio',
         
          'email' => 'Ops, é um email ex.. exemplo@gmail.com',
          
        ];
    }
}
