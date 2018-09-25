<?php

namespace ChristianPav\VuetifulPreset;

use Illuminate\Foundation\Console\Presets\Preset as LaravelPreset;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;

require 'utils.php';

class Preset extends LaravelPreset
{
    public static function install()
    {
        static::addSassAppFile();

        static::updatePackages();

        static::updateMix();

        static::scaffoldJavascript();
    }

    protected static function addSassAppFile()
    {
        copy(stubsPath('app.scss'), sassPath('app.scss'));
    }


    protected static function updatePackageArray($packages)
    {
        return array_merge(
            [
                "vuetiful-forms" => "latest",
                "vue-router"     => "^3.0.1",
            ],
            Arr::except(
                $packages,
                [
                    'popper.js',
                    'bootstrap',
                    'lodash',
                ]
            )
        );
    }

    protected static function updateMix()
    {
        copy(stubsPath('webpack.mix.js'), base_path('webpack.mix.js'));
    }

    protected static function scaffoldJavascript()
    {
        static::setUpJavascriptDirectories();
        static::copyJavaScriptFile('app.js');
        static::copyJavaScriptFile('router.js');
        static::copyJavaScriptFile('bootstrap.js');

        static::copyJavaScriptFile('Views/App.vue');
        static::copyJavaScriptFile('Views/Home.vue');
        static::copyJavaScriptFile('Views/BaseView.vue');

        static::copyJavaScriptFile('Forms/Form.js');

        static::copyJavaScriptFile('ApiResources/ApiResource.js');
    }

    protected static function copyJavaScriptFile($name)
    {
        copy(stubsPath($name), jsPath($name));

    }

    protected static function setUpJavascriptDirectories()
    {
        File::makeDirectory(jsPath('ApiResources'));

        File::makeDirectory(jsPath('Forms'));

        File::makeDirectory(jsPath('Models'));

        File::makeDirectory(jsPath('Views'));
        File::makeDirectory(jsPath('Views/Components'));
    }
}