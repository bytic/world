<?php

namespace ByTIC\World\Bundle\Api\Controllers\Traits;

trait WorldCountiesTrait
{
    public function for()
    {
        $countryCode = $this->getRequest()->getParam('country');
    }
}
