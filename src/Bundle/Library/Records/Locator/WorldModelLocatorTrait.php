<?php

namespace ByTIC\World\Bundle\Library\Records\Locator;

use ByTIC\World\Countries\Models\Countries;
use Nip\Records\AbstractModels\RecordManager;

trait WorldModelLocatorTrait
{
    /**
     * @return Countries
     */
    public static function countries(): RecordManager
    {
        return static::get('countries', Countries);
    }
}

