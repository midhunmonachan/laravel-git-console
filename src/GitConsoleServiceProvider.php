<?php

namespace Midhun\GitConsole;

use Midhun\GitConsole\Commands\GitConsoleCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GitConsoleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-git-console')
            ->hasConfigFile()
            ->hasCommand(GitConsoleCommand::class);
    }
}
