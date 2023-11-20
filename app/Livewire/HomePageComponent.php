<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home - Blog Doug Design')]
class HomePageComponent extends Component
{
    public $posts = [];

    public function mount()
    {
        $this->posts = Post::latest()->take(3)->get();
    }

    public function render()
    {
        return view('livewire.home');
    }
}
