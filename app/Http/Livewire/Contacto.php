<?php

namespace App\Http\Livewire;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Livewire\Component;

class Contacto extends Component
{
    public $name, $email, $phone, $message;

    public function submitContactForm(ContactRequest $request)
    {
        $validatedData = $request->validate();
        // $this->dispatchBrowserEvent('banner-message', [
        //     'style' => 'success',
        //     'message' => 'Su solicitud fue enviada con éxito!'
        // ]);
    }
    public function render()
    {
        return view('livewire.contacto');
    }
}
