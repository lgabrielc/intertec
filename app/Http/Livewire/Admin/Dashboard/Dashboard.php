<?php

namespace App\Http\Livewire\Admin\Dashboard;

use Livewire\Component;
use phpseclib3\Net\SSH2;

class Dashboard extends Component
{
    public $oltOutput, $executionTime;
    public function connectToOlt()
    {
        $startTime = microtime(true);
        // set_time_limit(300);
        // IP PUBLICA PARA DE EL OLT = 201.218.137.0
        // PUERTO 22
        // USER = nocarapasys1 OLT 1
        // PASSWORD= nocarapasys123
        $oltHost = '201.218.137.128'; // Cambia esto con la dirección IP de tu OLT
        $oltUsername = 'nocarapasys2';
        $oltPassword = 'nocarapasys123';

        $ssh = new SSH2($oltHost);
        // $ssh->login($oltUsername, $oltPassword);
        if (!$ssh->login($oltUsername, $oltPassword)) {
            throw new \Exception('Login Failed');
        }

        // Ejecuta el comando "enable" en el dispositivo OLT
        $ssh->write("enable\n");
        $ssh->write("config\n");
        $ssh->write("interface gpon 0/2\n");
        $ssh->write("ont add 15 4 sn-auth 485754431EADA09F omci ont-lineprofile-id 10 ont-srvprofile-id 10 desc cliente6304\n\n");
        $ssh->write("quit\n");
        $ssh->write("service-port 3104 vlan 1 gpon 0/2/15 ont 4 gemport 1 multi-service user-vlan 1 tag-transform translate\n\n");
        $ssh->write("save\n\n");
        $this->oltOutput = $ssh->read('[prompt]');
        // $ssh->write("");

        // Ejecuta el comando "config" en el dispositivo OLT
        // $oltOutput = $ssh->read('[prompt]');

        // Ejecuta el comando "interface gpon 0/1" en el dispositivo OLT
        // $ssh->read('[prompt]');

        // Ejecuta el comando "ont add 0 2 sn-auth 48575443C9718F9D omci ont-lineprofile-id 10 ont-srvprofile-id 10 desc cliente2" en el dispositivo OLT
        // $ssh->read('[prompt]');

        // Ejecuta el comando "quit" en el dispositivo OLT
        // $ssh->read('[prompt]');

        // $oltOutput = $ssh->read('[prompt]');
        // $this->oltOutput = $oltOutput;
        $ssh->disconnect();
        $endTime = microtime(true); // Guardar el tiempo de finalización
        $this->executionTime = $endTime - $startTime;
        // dd($this->oltOutput);
    }
    public function render()
    {
        return view('livewire.admin.dashboard.dashboard')->layout('layouts.admin');
    }
}
