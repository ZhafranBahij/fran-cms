<?php

namespace App\Livewire\Component;

use App\Models\ContactUs as ModelsContactUs;
use Livewire\Component;

class ContactUs extends Component
{

    public $contact_us;

    public function mount()
    {
        $this->contact_us = ModelsContactUs::query()
                                ->latest()
                                ->first();
    }

    public function render()
    {
        return view('livewire.component.contact-us');
    }
}
