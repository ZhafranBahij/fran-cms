<?php

namespace App\Livewire\Component;

use App\Models\Article;
use Livewire\Component;

class ProjectList extends Component
{
    public $projects;

    public function mount()
    {
        $this->projects = Article::query()
                            ->where('type', 'project')
                            ->latest()
                            ->get();
    }

    public function render()
    {
        return view('livewire.component.project-list');
    }
}
