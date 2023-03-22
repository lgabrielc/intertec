<?php

namespace App\Http\Livewire\Admin\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;
    public $path, $user, $nombre, $apellido, $dni, $email, $direccion, $password, $imageProfile;

    public function mount()
    {
        $this->user = auth()->user();
        $this->dni = auth()->user()->dni;
        $this->path = $this->user->profile_photo_path;
        $this->nombre = auth()->user()->nombre;
        $this->apellido = auth()->user()->apellido;
        $this->email = auth()->user()->email;
        $this->dni = auth()->user()->dni;
        $this->direccion = auth()->user()->direccion;
        $this->password = $this->user->password;
    }
    public function update_profile()
    {
        $user = User::find(auth()->user()->id);
        $this->validate([
            'email' => 'required|email|unique:users,email,' . $user->id,
            'direccion' => 'required|min:3|max:255',
            'password' => 'required|min:8',
            'imageProfile' => 'nullable|image|max:1024'
        ]);
        $user->direccion = $this->direccion;
        $user->email = $this->email;
        if ($this->imageProfile) {
            Storage::delete('public/' . $this->user->profile_photo_path);
            $user->profile_photo_path = $this->imageProfile->store('perfil', 'public');
        }
        if ($this->password != $user->password) {
            $user->password = bcrypt($this->password);
        }
        $user->save();
        // $this->dispatchBrowserEvent('banner-message', [
        //     'style' => 'success',
        //     'message' => '¡Perfil actualizado exitosamente!'
        // ]);
        $this->emit('alert_success', 'El perfil se actualizó con éxito');
    }
    public function render()
    {
        return view('livewire.admin.profile.profile');
    }
}
