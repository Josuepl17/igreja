<?php

namespace App\Http\Requests;

use App\Services\MeuServico;
use Illuminate\Foundation\Http\FormRequest;

class FormFilialUsers extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'cnpj' => 'required|min:14|max:18', // Considerando que o CNPJ pode ter pontos e traços
            'password' => [
                'required',
                'string',
                'min:8', // Mínimo de 8 caracteres

            ],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O email informado não é válido.',
            'cnpj.required' => 'O campo CNPJ é obrigatório.',
            'cnpj.min' => 'O CNPJ deve ter no mínimo 14 caracteres.',
            'cnpj.max' => 'O CNPJ deve ter no máximo 18 caracteres.',
            'password.required' => 'O campo senha é obrigatório.',
            'password.min' => 'A senha deve ter no mínimo 8 caracteres.',
        ];
    }
}

