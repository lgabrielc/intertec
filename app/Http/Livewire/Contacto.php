<?php

namespace App\Http\Livewire;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Livewire\Component;

class Contacto extends Component
{
    public $name, $email, $phone, $message;

    public function validateData()
    {
        $this->validate(
            [
                'name' => 'required|min:4',
                'email' => 'required|email',
                'phone' => 'required|min:9|max:12',
                'message' => 'required|min:2|max:40'
            ],
            [
                'name.required' => 'El nombre es obligatorio',
                'name.min' => 'El nombre tiene que tener 4 caracteres como mínimo',
                'email.required' => 'El email es obligatorio',
                'email.email' => 'El email debe de tener un formato de correo',
                'phone.required' => 'El telefono es obligatorio',
                'phone.min' => 'El telefono tiene que tener como mínimo 9 dígitos',
                'message.required' => 'El mensaje es obligatorio',
                'message.min' => 'El mensaje tiene que tener como mínimo 2 caracteres',
                'message.max' => 'El mensaje no puede tener más de 40 caracteres',
            ]
        );
    }

    public function submitContactForm()
    {
        $this->validateData();
        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message
        ]);
        $this->reset('name', 'email', 'phone', 'message');
        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'success',
            'message' => 'Su solicitud fue enviada con éxito!'
        ]);
    }
    public function render()
    {
        return view('livewire.contacto');
    }
}
