<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateUserRegister extends FormRequest
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
    public function rules(): array
    {
        return [
        
                'nome' => [
                    'required',
                    'string',
                    'min:3',
                    'max:50',
                    'regex:/^[a-zA-Z\s]+$/',
                    function ($attribute, $value, $fail) {
                        if (preg_match('/ {2,}/', $value)) {
                            $fail('O campo ' . $attribute . ' não pode conter 2 ou mais espaços consecutivos.');
                        }
                    },
                ],

                'telefone' => 'required|string|max:9',

                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    'unique:users',
                    'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
                ],

                'password' => 'required|string|min:8|confirmed',

                'nome_ordem' => [
                    'required',
                    'string',
                    'max:30',
                    'regex:/^[0-9A-Z]{1,30}$/',
                ],

                'genero' => 'required|string|in:Masculino,Feminino',

                'especialidade_id' => 'required|exists:especialidades,id',





            // 'nome' => 'required|string|max:50|',
            // 'email' => 'required|email|unique:users|max:255',
            // 'sexo' => 'required|in:Masculino,Feminino',
            // 'password' => 'required|string|min:8',
            // 'tipo_utilizador' => 'required|numeric',
        ];
    }

    public function messages(){
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string' => 'O campo nome deve ser uma string.',
            'nome.min' => 'O campo nome não pode ter menos de :min  caracteres.',
            'nome.max' => 'O campo nome não pode ter mais de :max caracteres.',
            'nome.regex' => 'O campo nome não pode ter numero',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O campo email deve ser um endereço de email válido.',
            'email.unique' => 'O email já está em uso.',
            'email.max' => 'O campo email não pode ter mais de :max caracteres.',
            'sexo.required' => 'O campo gênero é obrigatório.',
            'sexo.in' => 'O campo gênero deve ser Masculino ou Feminino.',
            'password.required' => 'O campo senha é obrigatório.',
            'password.string' => 'O campo senha deve ser uma string.',
            'password.min' => 'O campo senha deve ter pelo menos :min caracteres.',
            'tipo_utilizador.required' => 'O campo tipo de usuário é obrigatório.',
            'tipo_utilizador.numeric' => 'O campo tipo de usuário deve ser um número.',
        ];
    }
}
