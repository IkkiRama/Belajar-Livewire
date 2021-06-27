<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User as Users;

class User extends Component
{
    public $user;

    public function render()
    {
        $this->user = Users::all();
        return view('livewire.user');
    }
}
