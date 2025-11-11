<?php

declare(strict_types=1);

namespace ByTIC\World\Utility;

use ByTIC\World\WorldServiceProvider;
use Exception;

/**
 *
 */
class PackageConfig extends \ByTIC\PackageBase\Utility\PackageConfig
{
    protected $name = WorldServiceProvider::NAME;

    public static function configPath(): string
    {
        return __DIR__ . '/../../config/world.php';
    }

    public static function tableName($name, $default = null)
    {
        return static::instance()->get('tables.' . $name, $default);
    }

    public static function modelsName($name, $default = null)
    {
        return static::instance()->get('models.' . $name, $default);
    }

    /**
     * @return string|null
     * @throws Exception
     */
    public static function databaseConnection(): ?string
    {
        return (string)static::instance()->get('database.connection');
    }

    public static function shouldRunMigrations(): bool
    {
        return static::instance()->get('database.migrations', false) !== false;
    }
}
