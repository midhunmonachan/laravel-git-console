<?php

namespace Midhun\GitConsole\Tests;

use Midhun\GitConsole\GitConsoleServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            GitConsoleServiceProvider::class,
        ];
    }
}
