<?php

namespace ByTIC\World\Bundle\Api\Controllers\Traits;

use ByTIC\Controllers\Behaviors\Async\ResponseTrait;
use ByTIC\World\States\Actions\FindStatesByCountryCode;

trait WorldStatesTrait
{
    use ResponseTrait;

    public function for()
    {
        $countryCode = $this->getRequest()->get('country');
        $states = FindStatesByCountryCode::for($countryCode)->fetch();

        $this->setResponseValues($states);
    }
}
