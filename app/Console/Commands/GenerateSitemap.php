<?php

namespace App\Console\Commands;

use App\Services\GenerateSitemapService;
use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:generate-sitemap';
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gera o sitemap da aplicação';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        GenerateSitemapService::handle();
    }
}
