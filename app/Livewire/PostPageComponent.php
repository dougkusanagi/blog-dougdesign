<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostPageComponent extends Component
{
    public $post;

    public function mount(string $slug)
    {
        $this->post = Post::query()
            ->where('slug', $slug)
            ->active()
            ->with(['categories'])
            ->first();

        abort_if(!$this->post, 404);
    }

    public function render()
    {
        return view('livewire.post')
            ->layoutData([
                'description' => $this->post->excerpt,
            ])
            ->title($this->post->title);
    }
}
