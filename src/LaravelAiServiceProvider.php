<?php

namespace LaravelAi\LaravelAi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use LaravelAi\LaravelAi\Commands\LaravelAiCommand;

class LaravelAiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-ai')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-ai_table')
            ->hasCommand(LaravelAiCommand::class);
    }
}
