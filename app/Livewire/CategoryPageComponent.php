<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class CategoryPageComponent extends Component
{
    public $slug;

    public function mount(string $slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $posts = Post::query()
            ->whereHas('categories', fn ($query) => $query->where('slug', $this->slug))
            ->with(['categories'])
            ->active()
            ->latest()
            ->paginate();

        abort_if(!$posts, 404);

        return view('livewire.category/filter', [
            'posts' => $posts
        ]);
    }
}
