<?php

namespace App\Services;

use App\Models\Post;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemapService
{
    public static function handle()
    {
        $url = config('app.url', 'http://blog.dougdesign.com.br');
        $sitemap = Sitemap::create();
        $path = public_path('sitemap.xml');

        Post::all()->each(function ($post) use ($url, $sitemap) {
            $sitemap->add(
                Url::create($url . '/' . $post->slug)
                    ->setPriority(0.9)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );
        });

        $sitemap->writeToFile($path);
    }
}
