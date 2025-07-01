<?php

namespace App\Livewire\Component;

use App\Models\AboutUs as ModelsAboutUs;
use Livewire\Component;

class AboutUs extends Component
{

    public $about_us;

    public function mount()
    {
        $this->about_us = ModelsAboutUs::query()
                            ->latest()
                            ->first();
    }

    public function render()
    {
        return view('livewire.component.about-us');
    }
}
