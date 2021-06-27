<?php

namespace App\Http\Livewire;

use Livewire\Component;

class User extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                {{-- Success is as dangerous as failure. --}}
                <h1>This is User Component</h1>
            </div>
        blade;
    }
}
