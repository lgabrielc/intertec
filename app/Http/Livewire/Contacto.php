<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contacto extends Component
{
    public $nombre,$correo,$mensaje;

    public function boton_contactanos(){
        
    }

    public function render()
    {
        return view('livewire.contacto');
    }
}
