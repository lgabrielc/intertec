<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OptimizeController extends Controller
{
    public function index()
    {
        \Artisan::call('migrate:fresh --seed');
        return 'Command executed successfully.';
    }
}