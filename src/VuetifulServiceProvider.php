<?php

namespace ChristianPav\VuetifulPreset;

use Illuminate\Foundation\Console\PresetCommand;
use Illuminate\Support\ServiceProvider;

class VuetifulServiceProvider extends ServiceProvider
{
    public function boot()
    {
        PresetCommand::macro('vuetiful', function($command) {
            Preset::install();

            $command->info('WAM! All done. Compile your assets, customize your bootstrap.js file, and get building!');
        });
    }
}
