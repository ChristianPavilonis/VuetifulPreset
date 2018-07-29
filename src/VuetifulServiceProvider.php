<?php

namespace ChristianPav\TissysPreset;

use Illuminate\Foundation\Console\PresetCommand;
use Illuminate\Support\ServiceProvider;

class VuetifulServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('vuetiful', function($command) {
            Preset::install();

            $command->info('WAM! All done. Compile your assets, customize your bootstrap.js file, and get building!');
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
