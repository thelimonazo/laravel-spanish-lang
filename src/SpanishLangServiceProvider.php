<?php

namespace TheLimonazo\SpanishLang;

use Illuminate\Support\ServiceProvider;

class SpanishLangServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        // Determine the base path according to the Laravel version
        $basePath = version_compare(app()->version(), '9.0', '<')
            ? resource_path('lang/es')
            : base_path('lang/es');

        // Publish the language files
        $this->publishes([
            __DIR__.'/../lang' => $basePath,
        ], 'laravel-lang-spanish');
    }
}
