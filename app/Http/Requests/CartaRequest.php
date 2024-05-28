<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use function PHPSTORM_META\map;

class CartaRequest extends FormRequest
{
  
    public function authorize(): bool
    {
        return true;
    }


   
    public function rules(): array
    {
        return [
            'nome' => 'required',
            'estante' => 'required',
            'prateleira' => 'required',
            'pasta' => 'required',
            'falecimento' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'nome'=> 'o nome é obrigatório',
            'estante' => 'a estante é obrigatória',
            'prateleira'=> 'a prateleira é obrigatória',
            'pasta' => 'a pasta é obrigatória',
            'falecimento' => 'a data é obrigatória'
        ];
    }
}
