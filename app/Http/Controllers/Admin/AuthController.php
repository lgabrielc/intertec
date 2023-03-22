<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index_perfil()
    {
        return view('livewire.admin.profile.index');
    }
    public function index_dashboard()
    {
        return view('livewire.admin.dashboard.index');
    }
    public function index_usuarios()
    {
        return view('livewire.admin.users.index');
    }
    public function index_recursos()
    {
        return view('livewire.admin.recursos.index');
    }
}
