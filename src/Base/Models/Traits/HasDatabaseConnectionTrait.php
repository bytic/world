<?php

namespace ByTIC\World\Base\Models\Traits;

use ByTIC\World\Utility\PackageConfig;
use Nip\Database\Connections\Connection;

use function app;

/**
 * Trait HasDatabaseConnectionTrait
 * @package ByTIC\World\Base\Models\Traits
 */
trait HasDatabaseConnectionTrait
{

    /**
     * @return Connection
     */
    protected function newDbConnection()
    {
        return app('db')->connection(PackageConfig::databaseConnection());
    }
}

