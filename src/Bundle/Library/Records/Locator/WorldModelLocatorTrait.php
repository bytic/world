<?php

namespace ByTIC\World\Bundle\Library\Records\Locator;

use ByTIC\World\Countries\Models\Countries;
use ByTIC\World\Utility\WorldModels;
use Nip\Records\AbstractModels\RecordManager;

trait WorldModelLocatorTrait
{
    /**
     * @return Countries
     */
    public static function countries(): RecordManager
    {
        return static::get('countries', WorldModels::countriesClass());
    }

    public static function states()
    {
        return static::get('states', WorldModels::statesClass());
    }
}

