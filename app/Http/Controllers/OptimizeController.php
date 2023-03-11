<?php

namespace App\Http\Controllers;

define('STDIN', fopen('php://stdin', 'r'));

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

        \Artisan::call('migrate:fresh', ['--seed' => true, '--force' => true]);
        return 'Command php artisan migrate:fresh --seed successfully.';
    }
}
