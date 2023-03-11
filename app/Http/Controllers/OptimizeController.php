<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OptimizeController extends Controller
{
    public function index()
    {
        \Artisan::call('optimize');
        return 'Command executed successfully.';
    }
}