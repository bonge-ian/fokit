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
                // Add more resources here
            ], 'fortify-ui-preset-resources');

            $this->commands([
                FokitUIPresetCommand::class,
            ]);
        }
    }
}
