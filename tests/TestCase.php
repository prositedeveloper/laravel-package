<?php

namespace Prositedeveloper\Package\Tests;

use Prositedeveloper\Package\Providers\LaravelPackageServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app): array 
    {
        return [
            LaravelPackageServiceProvider::class
        ];
    }
}