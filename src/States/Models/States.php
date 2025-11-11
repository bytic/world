<?php

namespace ByTIC\World\States\Models;

use ByTIC\World\Base\Models\Traits\CommonRecordsTrait;
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

    public const TABLE = 'world-States';
    public const CONTROLLER = 'world-States';

}
