<?php

namespace ByTIC\World\Countries\Models;

use ByTIC\World\Base\Models\Traits\CommonRecordsTrait;
use Nip\Records\RecordManager;

/**
 * Class Countries
 * @package ByTIC\World\Countries\Models
 * @method Country getNew($data = [])
 */
class Countries extends RecordManager
{
    use CountriesTrait;
    use CommonRecordsTrait;

    public const TABLE = 'world-countries';
    public const CONTROLLER = 'world-countries';

}
