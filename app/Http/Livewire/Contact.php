<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $email;
    public $phone;
    public $pesan;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:12',
            'pesan' => 'required|min:20'
        ]);
    }

    public function submitForm()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:12',
            'pesan' => 'required|min:20'
        ]);

        dd($this->name, $this->email, $this->phone, $this->pesan);
    }


    public function render()
    {
        return view('livewire.contact');
    }
}
