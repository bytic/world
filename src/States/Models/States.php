<?php

namespace ByTIC\World\States\Models;

use ByTIC\World\Base\Models\Traits\CommonRecordsTrait;
use ByTIC\World\Base\Models\Traits\HasDatabaseConnectionTrait;
use Nip\Records\RecordManager;

/**
 * Class States
 * @package ByTIC\World\States\Models
 * @method State getNew($data = [])
 */
class States extends RecordManager
{
    use StatesTrait;
    use CommonRecordsTrait;
    use HasDatabaseConnectionTrait;

    public const TABLE = 'world-states';
    public const CONTROLLER = 'world-states';
}
