<?php

namespace ByTIC\World\Countries\Models;

use ByTIC\World\Base\Models\Traits\CommonRecordTrait;
use Nip\Records\Record;

/**
 * Class Country
 * @package ByTIC\World\Countries\Models
 */
class Country extends Record
{
    use CountryTrait;
    use CommonRecordTrait;

    public function getRegistry()
    {
    }

}
