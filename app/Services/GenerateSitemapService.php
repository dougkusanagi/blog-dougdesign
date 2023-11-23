<?php

namespace App\Services;

use App\Models\Post;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemapService
{
    public static function handle()
    {
        $path = public_path('sitemap.xml');
        $url = config('app.url', 'http://blog.dougdesign.com.br');
        $sitemap = Sitemap::create();

        Post::all()->each(function ($post) use ($url, $sitemap) {
            // $sitemap->add($url . '/' . $post->slug);

            $sitemap->add(
                Url::create($url . '/' . $post->slug)
                    ->setPriority(0.9)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );
        });

        $sitemap->writeToFile($path);
    }
}
