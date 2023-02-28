<?php

namespace Rakhasa\Lararytr;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Rakhasa\Lararytr\Commands\LararytrCommand;

class LararytrServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('lararytr')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_lararytr_table')
            ->hasCommand(LararytrCommand::class);
    }
}
