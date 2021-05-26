<?php

namespace BongeIan\FokitUIPreset\Commands;

use Illuminate\Console\Command;

class FokitUIPresetCommand extends Command
{
    public $signature = 'fortify:fokit';

    public $description = 'Install Fokit UI with views and resources';

    public function handle()
    {
        $this->publishAssets();

        $this->comment('Fokit UI is now installed.');
        $this->info('Don\'t forget to run npm i && npm run dev');
    }

    protected function publishAssets()
    {
        $this->callSilent('vendor:publish', ['--tag' => 'fortify-ui-preset-resources', '--force' => true]);
    }
}
