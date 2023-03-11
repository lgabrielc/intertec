<?php

namespace App\Http\Livewire\Admin\Dashboard;

use Livewire\Component;
use phpseclib3\Net\SSH2;

class Dashboard extends Component
{
    public $oltOutput;
    public function connectToOlt()
    {
        #olt 1, 10.100.10.2
        #olt 2, 10.100.14.2

        $oltHost = '10.100.10.2'; // Cambia esto con la dirección IP de tu OLT
        $oltUsername = 'root';
        $oltPassword = 'admin123';

        $ssh = new SSH2($oltHost);
        if (!$ssh->login($oltUsername, $oltPassword)) {
            throw new \Exception('Login Failed');
        }

        $oltOutput = $ssh->exec('show interfaces');
        $this->oltOutput = $oltOutput;

        $ssh->disconnect();
    }
    public function render()
    {
        return view('livewire.admin.dashboard.dashboard')->layout('layouts.admin');
    }
}
