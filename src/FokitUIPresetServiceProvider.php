<?php

namespace BongeIan\FokitUIPreset;

use Illuminate\Support\ServiceProvider;
use BongeIan\FokitUIPreset\Commands\FokitUIPresetCommand;

class FokitUIPresetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../stubs/resources/views' => base_path('resources/views'),
                __DIR__ . '/../stubs/resources/scss' => base_path('resources/scss'),
                __DIR__ . '/../stubs/resources/js' => base_path('resources/js'),
                __DIR__ . '/../stubs/.editorconfig' => base_path('.editorconfig'),
                __DIR__ . '/../stubs/.gitignore' => base_path('.gitignore'),
            ], 'fokit-ui-preset-resources');

            $this->publishes([
                __DIR__ . '/../stubs/webpack/layouts/' => base_path('resources/views/layouts'),
                __DIR__ . '/../stubs/webpack/package.json' => base_path('package.json'),
                __DIR__ . '/../stubs/webpack/webpack.mix.js' => base_path('webpack.mix.js'),
            ], 'fokit-webpack-resources');

            $this->publishes([
                __DIR__ . '/../stubs/vite/layouts/' => base_path('resources/views/layouts'),
                __DIR__ . '/../stubs/vite/package.json' => base_path('package.json'),
                __DIR__ . '/../stubs/vite/vite.config.js' => base_path('vite.config.js'),
            ], 'fokit-vite-resources');

            $this->publishes([
                __DIR__ . '/../app/Providers' => base_path('app/Providers'),
            ], 'layout-component-provider');

            $this->commands([
                FokitUIPresetCommand::class,
            ]);
        }
    }
}
