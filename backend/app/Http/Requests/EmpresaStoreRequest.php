<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaStoreRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "descricao" => "required|string|max:150", 
            "cnpj"      => "required|string|size:14", 
            "uf"        => "required|string|size:2"
        ];
    }

    public function messages(): array
    {
        return[
            "descricao.required" => "Descrição é obrigatória",
            "descricao.max"      => "Descrição não pode ser maior que 150 caracteres.",

            "cnpj.required"      => "CNPJ obrigatório",
            "cnpj.size"          => "O CNPJ deve conter exatamente 14 caracteres.",

            "uf.required"        => "UF é obrigatório.",
            "uf.size"            => "UF deve conter exatamente 2 caracteres."
        ];
    }
}
