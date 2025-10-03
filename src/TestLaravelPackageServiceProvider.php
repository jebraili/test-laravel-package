<?php

namespace jebraili\TestLaravelPackage;

use jebraili\TestLaravelPackage\Commands\TestLaravelPackageCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TestLaravelPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('test-laravel-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_test_laravel_package_table')
            ->hasCommand(TestLaravelPackageCommand::class);
    }
}
