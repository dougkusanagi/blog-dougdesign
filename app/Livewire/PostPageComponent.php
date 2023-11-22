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
        // if ($this->post->id === 1) {
        //     dd($this->post->getFirstMedia('image')?->getAvailableFullUrl(['preview']));
        // }

        return view('livewire.post')
            ->layoutData([
                'description' => $this->post->teaser,
                'image' => $this->post->presenter()->imagePreview(),
            ])
            ->title($this->post->title);
    }
}
