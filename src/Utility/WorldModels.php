<?php

declare(strict_types=1);

namespace ByTIC\World\Utility;

use ByTIC\PackageBase\Utility\ModelFinder;
use ByTIC\World\Countries\Models\Countries;
use ByTIC\World\States\Models\States;
use ByTIC\World\WorldServiceProvider;

/**
 * Class WorldModels
 * @package ByTIC\World\Utility
 */
class WorldModels extends ModelFinder
{
    public const WORLD_COUNTRIES = 'world_countries';

    public const WORLD_STATES = 'world_states';

    public const WORLD_CITIES = 'world_cities';


    public static function countries()
    {
        return static::getModels(self::WORLD_COUNTRIES, Countries::class);
    }

    public static function countriesClass()
    {
        return PackageConfig::modelsName(self::WORLD_COUNTRIES);
    }

    public static function states()
    {
        return static::getModels(self::WORLD_STATES, States::class);
    }

    public static function statesClass()
    {
        return PackageConfig::modelsName(self::WORLD_STATES);
    }

    public static function cities()
    {
        return static::getModels(self::WORLD_CITIES);
    }


    protected static function packageName(): string
    {
        return WorldServiceProvider::NAME;
    }
}
