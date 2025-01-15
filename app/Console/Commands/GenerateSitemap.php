<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Sitemap::create()
            ->add(Url::create('/')->setPriority(1.0)->setChangeFrequency('daily'))
            ->add(Url::create('/web')->setPriority(0.8)->setChangeFrequency('monthly'))
            ->add(Url::create('/dev')->setPriority(0.8)->setChangeFrequency('monthly'))
            ->add(Url::create('/support')->setPriority(0.8)->setChangeFrequency('monthly'))
            ->add(Url::create('/contact')->setPriority(0.8)->setChangeFrequency('monthly'))
            ->writeToFile(public_path('sitemap.xml')); 

        $this->info('Sitemap generated successfully!');
    }
}
