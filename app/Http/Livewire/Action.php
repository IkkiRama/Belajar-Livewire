<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Action extends Component
{
    public $sum;
    public $message;
    public $num1;
    public $num2;
    public $hasil;

    public function addTwoNumber($num1, $num2)
    {
        $this->sum = $num1 + $num2;
    }

    public function displayMessage($msg)
    {
        $this->message = $msg;
    }

    public function tambah()
    {
        $this->hasil = $this->num1 + $this->num2;
    }
    public function render()
    {
        return view('livewire.action');
    }
}
