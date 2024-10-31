<?php

namespace App\Livewire;

use Livewire\Component;

class ComicChapter extends Component
{
    public $slug;
    public $chapter;
    public function mount($slug,$chapter)
    {
        $this->slug = $slug;
        $this->chapter = $chapter;
    }
    public function render()
    {
        dd($this->chapter);
        return view('livewire.comic-chapter');
    }
}
