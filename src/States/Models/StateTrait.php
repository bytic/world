<?php

namespace  ByTIC\World\States\Models;

/**
 * @property string $name
 * @property string $native
 * @property string $country_code
 * @property string $iso2
 * @property string $iso3166_2
 */
trait StateTrait
{
    public function getName()
    {
        return $this->name;
    }

    public function getNameNative()
    {
        return $this->native;
    }
}
