<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contacto extends Component
{
    public $name, $email, $phone, $message;

    public function button_contact()
    {
        $this->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'phone' => 'numeric|min:9|max:12',
            'message' => 'required|min:2|max:40'
        ]);
        dd($this->name);
    }

    public function render()
    {
        return view('livewire.contacto');
    }
}
