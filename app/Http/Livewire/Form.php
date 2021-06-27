<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{
    public $name;
    public $message;
    public $kelamin;
    public $hobi=[];
    public $status;

    public function render()
    {
        return view('livewire.form');
    }
}
