<?php

namespace App\Livewire\Component;

use App\Models\Fact;
use Livewire\Component;

class FunFact extends Component
{
    public $facts;

    public function mount()
    {
        $this->facts = Fact::query()
                            ->latest()
                            ->get();
    }

    public function render()
    {
        return view('livewire.component.fun-fact');
    }
}
