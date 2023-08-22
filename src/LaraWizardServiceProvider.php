<?php

namespace Ahrmerd\LaraWizard;

use Ahrmerd\LaraWizard\Commands\LaraWizardCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaraWizardServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('larawizard')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_larawizard_table')
            ->hasCommand(LaraWizardCommand::class);
    }
}
