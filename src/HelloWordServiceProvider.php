<?php

namespace nolions\HelloWord;

use Illuminate\Support\ServiceProvider;

class HelloWordServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Boot the authentication services for the application.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/Say.php';
    }
}
