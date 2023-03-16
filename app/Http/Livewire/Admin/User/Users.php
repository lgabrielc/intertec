<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Testing\Fakes\Fake;
use Livewire\Component;
use Livewire\WithPagination;
use Peru\Jne\DniFactory;
use Spatie\Permission\Models\Role;

class Users extends Component
{

    use WithPagination;
    public $roles;
    public $user, $nombre, $apellido, $dni, $email, $direccion, $rol, $telefono;
    public $show_modal_edit = false;
    public $show_modal_delete = false;
    public $show_model_alert = true;

    public function mount()
    {
        $this->roles = Role::all()->pluck('name');
    }
    public function search_dni()
    {
        // if (strlen($this->dni) == 8) {
        //     $factory = new DniFactory();
        //     $cs = $factory->create();
        //     $person = $cs->get($this->dni);
        //     if (!$person) {
        //         $this->mensaje = 'DNI INVALIDO';
        //         $this->reset('nombre', 'apellido');
        //     } else {
        //         $this->persona = json_decode(json_encode($person), true);
        //         $this->reset('mensaje');
        //         $this->nombre = $this->persona['nombres'];
        //         $this->apellido = $this->persona['apellidoPaterno'] . " " . $this->persona['apellidoMaterno'];
        //         if (Cliente::where('dni', $this->dni)->exists()) {
        //             $this->mensaje = 'El DNI: ' . $this->dni . ' Ya está registrado';
        //         }
        //     }
        // }
    }
    public function edit_user(User $usuario)
    {
        $usuario->direccion = $this->direccion;
        $usuario->telefono = $this->telefono;
        $usuario->removeRole($usuario->getRoleNames()->first());
        $usuario->assignRole($this->rol);
        $usuario->save();
        $this->show_modal_edit = false;
    }
    public function modal_edit_user(User $usuario)
    {
        $this->resetErrorBag();
        $this->user = $usuario;
        $this->rol = $usuario->getRoleNames()->first();
        $this->nombre = $usuario->nombre;
        $this->apellido = $usuario->apellido;
        $this->direccion = $usuario->direccion;
        $this->telefono = $usuario->telefono;
        $this->dni = $usuario->dni;
        $this->email = $usuario->email;
        $this->show_modal_edit = true;
    }
    public function delete_user(User $usuario)
    {
        $usuario->delete();
        $this->reset('user');
        $this->resetPage();
        $this->show_modal_delete = false;
    }
    public function modal_delete_user(User $usuario)
    {
        $this->show_modal_delete = true;
        $this->user = $usuario;
    }
    public function updat_state(User $usuario)
    {
        $usuario->estado = $usuario->estado ? 0 : 1;
        $usuario->save();
    }
    public function render()
    {
        $users = User::orderBy('id', 'asc')->paginate(5);

        return view('livewire.admin.user.users', compact('users'))->layout('layouts.admin');
    }
}
