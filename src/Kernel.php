<?php

namespace Mahlenko\EditorJS;

use Illuminate\Support\ServiceProvider;

class Kernel extends ServiceProvider
{
    public function register(): void {
        $this->loadViewsFrom(__DIR__ . '/views', 'editor.js');

        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/editor.js'),
        ], 'editor.js');
    }
}
