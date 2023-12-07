<?php

namespace App\Services;

use App\Models\Post;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemapService
{
    public static function handle(): bool
    {
        $sitemap = Sitemap::create();

        $posts = Post::active()->get();

        if ($posts->isEmpty()) {
            throw new \Exception('Nenhum post ativo encontrado');
        }

        $posts
            ->each(function ($post) use ($sitemap) {
                $sitemap->add(
                    Url::create(route('posts.show', $post->slug))
                        ->setPriority(0.9)
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                );
            });

        $sitemap->writeToFile(
            public_path('sitemap.xml')
        );

        return true;
    }
}
