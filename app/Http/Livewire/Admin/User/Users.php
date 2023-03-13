<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;


    public function update_user()
    {

    }
    public function render()
    {
        $users = User::orderBy('id', 'asc')->paginate(5);

        return view('livewire.admin.user.users', compact('users'))->layout('layouts.admin');
    }
}
