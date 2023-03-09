<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public function render()
    {
        $users = User::all();

        return view('livewire.admin.user.users', compact('users'))->layout('layouts.admin');
    }
}
