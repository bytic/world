<?php

namespace ByTIC\World\States\Models;

use ByTIC\World\Base\Models\Traits\CommonRecordTrait;
use Nip\Records\Record;

/**
 * Class State
 * @package ByTIC\World\States\Models
 */
class State extends Record
{
    use StateTrait;
    use CommonRecordTrait;

    public function getRegistry()
    {
    }

}
