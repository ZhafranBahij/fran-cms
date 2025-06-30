<?php

namespace App\Livewire\Component;

use App\Models\Banner as ModelsBanner;
use Livewire\Component;

class Banner extends Component
{
    public $banners;

    public function mount()
    {
        $this->banners = ModelsBanner::query()
                            ->get();
    }

    public function render()
    {
        return view('livewire.component.banner');
    }
}
