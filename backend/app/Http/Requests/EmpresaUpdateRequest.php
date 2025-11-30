<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaUpdateRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "descricao" => "sometimes|string|max:150", 
            "cnpj"      => "sometimes|string|size:14", 
            "uf"        => "sometimes|string|size:2"
        ];
    }

    public function messages(): array
    {
        return[
            "descricao.max"      => "Descrição não pode ser maior que 150 caracteres.",

            "cnpj.size"          => "O CNPJ deve conter exatamente 14 caracteres.",

            "uf.size"            => "UF deve conter exatamente 2 caracteres."
        ];
    }
}
