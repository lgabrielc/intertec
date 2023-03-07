<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'phone' => 'required|min:9|max:12',
            'message' => 'required|min:2|max:40'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'name.min' => 'El nombre tiene que tener 4 caracteres como mínimo',
            'email.required' => 'El email es obligatorio',
            'email.email' => 'El email debe de tener un formato de correo',
            'phone.required' => 'El telefono es obligatorio',
            'phone.min' => 'El telefono tiene que tener como mínimo 9 dígitos',
            'message.required' => 'El mensaje es obligatorio',
            'message.min' => 'El mensaje tiene que tener como mínimo 2 caracteres',
            'message.max' => 'El mensaje no puede tener más de 40 caracteres',
        ];
    }
}
