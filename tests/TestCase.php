<?php

namespace :uc:vendor\:uc:package\Tests;

use :uc:vendor\:uc:package\:uc:packageServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }

    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            :uc:packageServiceProvider::class,
        ];
    }



}
