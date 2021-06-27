<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class Pelanggan extends Component
{
    use WithPagination;
    public function render()
    {
        $user = User::paginate(15);
        return view('livewire.pelanggan', compact(["user"]));
    }
}
