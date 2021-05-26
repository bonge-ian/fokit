<?php

namespace BongeIan\FokitUIPreset\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class FokitUIPresetCommand extends Command
{
    public $signature = 'fortify:fokit';

    public $description = 'Install Fokit UI with views and resources';

    public function handle()
    {
        $this->publishAssets();
        $this->updateWebpackUrl();
        $this->updateRoutes();

        $this->comment('Fokit UI is now installed.');
        $this->info('Don\'t forget to run npm i && npm run dev');
    }

    protected function publishAssets()
    {
        $this->callSilent('vendor:publish', ['--tag' => 'layout-component-provider', '--force' => true]);

        $this->callSilent('vendor:publish', ['--tag' => 'fokit-ui-preset-resources', '--force' => true]);

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

    protected function updateRoutes()
    {
        File::append(
            base_path('routes/web.php'),
            "\nRoute::prefix('user')->middleware(['auth', 'verified'])->group(function () {\n\tRoute::view('profile', 'profile.show');\n});\n"
        );
    }
}
