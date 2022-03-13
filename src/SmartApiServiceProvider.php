<?php

namespace SmartApi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use SmartApi\Commands\SmartApiCommand;

class SmartApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('smart-api')
            ->hasConfigFile()
            ->hasCommand(SmartApiCommand::class);
    }
}
