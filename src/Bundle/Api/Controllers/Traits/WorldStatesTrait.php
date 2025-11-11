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

        $response = $states->transform(function ($item) {
            $data = $item->toArray();
            unset($data['created_at']);
            unset($data['updated_at']);
            return $item->toArray();
        });

        $this->setResponseValues($response);
    }
}
