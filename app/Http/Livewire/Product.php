<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{
    public $title;
    public $name;
    public $infos = [];

    public function mount()
    {
        $this->infos[] = 'Aplication is Mounting';
    }

    public function hydrate()
    {
        $this->infos[] = 'Aplication is hydrate';
    }

    public function updating($name, $value)
    {
        $this->infos[] = 'Aplication is Updating';
    }


    public function updated($name, $value)
    {
        $this->infos[] = 'Aplication is updated';
    }


    public function updatingName()
    {
        $this->infos[] = 'Aplication is Updating Name property';
    }

    public function updatedName()
    {
        $this->infos[] = 'Aplication is updated Name property';
    }





    public function render()
    {
        return view('livewire.product');
    }
}
