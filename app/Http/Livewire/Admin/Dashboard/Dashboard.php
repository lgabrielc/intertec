<?php

namespace App\Http\Livewire\Admin\Dashboard;

use Livewire\Component;
use phpseclib3\Net\SSH2;

class Dashboard extends Component
{
    public $oltOutput, $executionTime;
 
    public function render()
    {
        return view('livewire.admin.dashboard.dashboard');
    }
}
