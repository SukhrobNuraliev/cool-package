<?php

namespace Sukhrob\CoolPackage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Sukhrob\CoolPackage\Commands\CoolPackageCommand;

class CoolPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('cool-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_cool-package_table')
            ->hasCommand(CoolPackageCommand::class);
    }
}
