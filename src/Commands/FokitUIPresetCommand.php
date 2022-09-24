<?php

namespace BongeIan\FokitUIPreset\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class FokitUIPresetCommand extends Command
{
    public $signature = 'fortify:fokit {--vite}';

    public $description = 'Install Fokit UI with views and resources';

    public function handle()
    {
        $this->publishAssets();

        if ($this->option('uikit')) {
            $this->updateWebpackUrl();
        }

        $this->updateServiceProviders();
        $this->updateRoutes();

        $this->comment('Fokit UI is now installed.');
        $this->info('Don\'t forget to run npm i && npm run dev');
    }

    protected function publishAssets()
    {
        $this->callSilent('vendor:publish', ['--tag' => 'layout-component-provider', '--force' => true]);

        $this->callSilent('vendor:publish', ['--tag' => 'fokit-ui-preset-resources', '--force' => true]);

        if ($this->option('vite')) {
            $this->callSilent('vendor:publish', ['--tag' => 'fokit-vite-resources', '--force' => true]);
        } else {
            $this->callSilent('vendor:publish', ['--tag' => 'fokit-webpack-resources', '--force' => true]);
        }

        File::deleteDirectory(resource_path('css'));
    }

    protected function updateWebpackUrl()
    {
        File::put(
            base_path('webpack.mix.js'),
            str_replace(
                'http://CHANGE_ME.test',
                env('APP_URL'),
                File::get(base_path('webpack.mix.js'))
            )
        );
    }

    public function updateServiceProviders()
    {
        $appConfig = file_get_contents(config_path('app.php'));

        if (
            Str::contains($appConfig, 'App\\Providers\\FortifyServiceProvider::class')
            && !Str::contains($appConfig, 'App\\Providers\\FortifyUIServiceProvider::class')
        ) {
            File::put(
                config_path('app.php'),
                str_replace(
                    "App\Providers\FortifyServiceProvider::class,",
                    "App\Providers\FortifyServiceProvider::class," . PHP_EOL . "        App\Providers\BladeComponentServiceProvider::class,",
                    $appConfig
                )
            );
        } else if (Str::contains($appConfig, 'App\\Providers\\FortifyUIServiceProvider::class')) {
            File::put(
                config_path('app.php'),
                str_replace(
                    "App\Providers\FortifyUIServiceProvider::class,",
                    "App\Providers\FortifyUIServiceProvider::class," . PHP_EOL . "        App\Providers\BladeComponentServiceProvider::class,",
                    $appConfig
                )
            );
        }
    }

    protected function updateRoutes()
    {
        File::append(
            base_path('routes/web.php'),
            "\nRoute::prefix('user')->middleware(['auth', 'verified'])->group(function () {\n\tRoute::view('profile', 'profile.show');\n});\n"
        );
    }
}
