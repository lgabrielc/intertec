<?php

namespace App\Http\Livewire\Admin\Users;

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
    public $nombre, $apellido, $dni, $email, $direccion, $rol, $telefono, $mensaje, $id_user;
    public $show_modal_edit = false;
    public $show_modal_delete = false;
    public $show_modal_create = false;

    public function mount()
    {
        $this->roles = Role::all()->pluck('name');
    }
    public function create_user()
    {
        $this->validate([
            'dni' => 'numeric|digits:8|unique:users,dni',
            'nombre' => 'required',
            'apellido' => 'required',
            'direccion' => 'required|min:3',
            'rol' => 'required',
            'email' => 'required|email|unique:users,email',
            'telefono' => 'required|digits:9',
        ]);
        $usuario_creado = User::create([
            'dni' => $this->dni,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'direccion' => $this->direccion,
            'telefono' => $this->telefono,
            'estado' => 1,
            'email' => $this->email,
            'password' => bcrypt($this->dni),
        ]);

        $this->show_modal_create = false;
        $this->emit('alert_success', 'El usuario se creo satisfactoriamente');
    }
    public function modal_create_user()
    {
        $this->resetErrorBag();
        $this->reset('id_user', 'nombre', 'apellido', 'dni', 'email', 'direccion', 'rol', 'telefono', 'mensaje', 'rol');
        $this->show_modal_create = true;
    }
    public function search_dni()
    {
        if (strlen($this->dni) == 8) {
            $factory = new DniFactory();
            $cs = $factory->create();
            $person = $cs->get($this->dni);
            if (!$person) {
                $this->mensaje = 'DNI INVALIDO';
                $this->reset('nombre', 'apellido');
            } else {
                $person = json_decode(json_encode($person), true);
                $this->reset('mensaje');
                $this->nombre = $person['nombres'];
                $this->apellido = $person['apellidoPaterno'] . " " . $person['apellidoMaterno'];
            }
        } else {
            $this->mensaje = 'DNI INVALIDO';
        }
    }
    public function edit_user(User $usuario)
    {
        $usuario->direccion = $this->direccion;
        $usuario->telefono = $this->telefono;
        $usuario->save();
        $usuario->syncRoles([]);
        $usuario->assignRole($this->rol);
        $this->show_modal_edit = false;
        $this->emit('alert_success', 'El usuario se actualizó con éxito');
    }
    public function modal_edit_user(User $usuario)
    {
        $this->reset('id_user', 'nombre', 'apellido', 'dni', 'email', 'direccion', 'rol', 'telefono', 'mensaje', 'rol');
        $this->resetErrorBag();
        $this->rol = $usuario->getRoleNames()->first();
        $this->id_user = $usuario->id;
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
        $this->emit('alert_success', 'El usuario se eliminó con éxito');
    }
    public function modal_delete_user(User $usuario)
    {
        $this->show_modal_delete = true;
        $this->usuario = $usuario;
    }
    public function updat_state(User $usuario)
    {
        $usuario->estado = $usuario->estado ? 0 : 1;
        $usuario->save();
    }
    public function render()
    {
        $users = User::orderBy('id', 'asc')->paginate(5);

        return view('livewire.admin.users.users', compact('users'))->layout('layouts.admin');
    }
}
