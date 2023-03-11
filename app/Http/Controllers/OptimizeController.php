<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OptimizeController extends Controller
{
    public function optimize()
    {
        \Artisan::call('optimize');
        return 'Command php artisan optimize successfully.';
    }
    public function fresh()
    {
        \Artisan::call('migrate:fresh', ['--seed' => true]);
        return 'Command php artisan migrate:fresh --seed successfully.';
    }
}
