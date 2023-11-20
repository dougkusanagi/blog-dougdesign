<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Home - Blog Doug Design')]
class HomePageComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $posts = Post::query()
            ->active()
            ->latest()
            ->paginate();

        return view('livewire.home', [
            'posts' => $posts
        ]);
    }
}
