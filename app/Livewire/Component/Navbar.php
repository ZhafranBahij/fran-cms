<?php

namespace App\Livewire\Component;

use App\Models\AboutUs;
use Livewire\Component;

class Navbar extends Component
{
    public $name;

    public function mount()
    {
        $this->name = AboutUs::query()
                            ->latest()
                            ->first(['name'])
                            ->name;
    }

    public function render()
    {
        return view('livewire.component.navbar');
    }
}
