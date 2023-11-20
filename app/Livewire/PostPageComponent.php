<?php

namespace App\Livewire;

use App\Models\Post as ModelsPost;
use Livewire\Component;

class PostPageComponent extends Component
{
    public $post;

    public function mount(ModelsPost $post)
    {
        $this->post = ModelsPost::first();
    }

    public function render()
    {
        return view('livewire.post');
    }
}
