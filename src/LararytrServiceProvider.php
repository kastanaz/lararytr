<?php

namespace Kastanaz\Lararytr;

use Spatie\LaravelPackageTools\Package;
use Kastanaz\Lararytr\Commands\LararytrCommand;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->name('lararytr');
    }
}
