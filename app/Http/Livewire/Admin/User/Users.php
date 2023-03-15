<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Testing\Fakes\Fake;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{

    use WithPagination;
    public $modalEdit = true;
    public $showModal = false;

    public function edit_user(User $usuario)
    {
        $this->resetErrorBag();
        $this->modalEdit = true;
    }
    public function delete_user(User $usuario)
    {
        $usuario->delete();
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
