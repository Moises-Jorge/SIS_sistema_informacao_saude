<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateInputs extends FormRequest
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

            'password' => 'required|string|min:8',

            //Outro Campo
        ];
    }

    public function messages(){
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string' => 'O campo nome deve ser uma string.',
            'nome.min' => 'O campo nome não pode ter menos de :min  caracteres.',
            'nome.max' => 'O campo nome não pode ter mais de :max caracteres.',
            'nome.regex' => 'O campo nome não pode ter numero',
        ];
    }
}
