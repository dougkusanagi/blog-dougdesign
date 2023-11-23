<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostPageComponent extends Component
{
    public $post;

    public function mount(Post $post)
    {
        $this->post = $post
            ->active()
            ->with(['categories'])
            ->first();

        abort_if(!$this->post, 404);
    }

    public function render()
    {
        return view('livewire.post')
            ->layoutData([
                'description' => $this->post->teaser,
                'image' => $this->post->presenter()->imagePreview(),
            ])
            ->title($this->post->title);
    }
}
