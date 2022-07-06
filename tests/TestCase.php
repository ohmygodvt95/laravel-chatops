<?php

namespace Runsystemjsc\LaravelChatops\Tests;

use Dotenv\Dotenv;
use Orchestra\Testbench\TestCase as Orchestra;
use Runsystemjsc\LaravelChatops\LaravelChatopsServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelChatopsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
        $dotenv = Dotenv::createImmutable(__DIR__.'/../');
        $dotenv->load();
    }
}
