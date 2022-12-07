<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiteRequest extends FormRequest
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
      'nome' => "required",
      'url'=> "required|url",
      'img' => "nullable|file|mimes:jpg,png,jpeg",
      'user_id',
      'instituicao_id'
        ];
    }


    public function messages(){
        return [ 
          'required'=>'Campos obrigatorio',
          'url' => 'precisa ter o https://www ou http:/www',
          'mimes' => 'Formato não esperado , tipo de formato aceito (PNG,JPG,JPEG)',
          'max' => 'o limite de caracter atingido'
        ];
    }
}
