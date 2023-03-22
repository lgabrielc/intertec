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
}
