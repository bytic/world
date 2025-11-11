<?php

namespace ByTIC\World;

use ByTIC\Audit\Utility\PackageConfig;
use ByTIC\PackageBase\BaseBootableServiceProvider;

/**
 * Class AuditServiceProvider
 * @package ByTIC\World
 */
class WorldServiceProvider extends BaseBootableServiceProvider
{
    public const NAME = 'world';

    /**
     * @inheritdoc
     */
    public function register()
    {
    }

    /**
     * @inheritdoc
     */
    public function provides()
    {
        return [];
    }

    public function migrations(): ?string
    {
        if (PackageConfig::shouldRunMigrations()) {
            return dirname(__DIR__) . '/migrations/';
        }

        return null;
    }

//    protected function registerCommands()
//    {
//        $this->commands(
//            SessionsCleanup::class,
//            SubscriptionsCharge::class
//        );
//    }
}
