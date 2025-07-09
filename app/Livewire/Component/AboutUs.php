<?php

namespace App\Livewire\Component;

use App\Models\AboutUs as ModelsAboutUs;
use App\Models\Service;
use Livewire\Component;

class AboutUs extends Component
{

    public $about_us, $services;

    public function mount()
    {
        $this->about_us = ModelsAboutUs::query()
                            ->latest()
                            ->first();

        $this->services = Service::query()
                            ->get();
    }

    public function render()
    {
        return view('livewire.component.about-us');
    }
}
