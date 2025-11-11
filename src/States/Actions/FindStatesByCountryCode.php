<?php

namespace ByTIC\World\States\Actions;

use Bytic\Actions\Action;
use Bytic\Actions\Behaviours\Entities\FindRecords;
use ByTIC\World\States\Models\State;
use ByTIC\World\Utility\WorldModels;
use Nip\Records\AbstractModels\RecordManager;
use Nip\Records\Collections\Collection;

/**
 * @method Collection|State[] fetch()
 */
class FindStatesByCountryCode extends Action
{
    use FindRecords;
    protected $countryCode = null;

    public static function for($countryCode)
    {
        $action = new static();
        $action->countryCode = $countryCode;
        return $action;
    }

    protected function findParams(): array
    {
        return [
            'where' => [
                ['country_code = ?', $this->countryCode],
            ],
        ];
    }

    protected function generateRepository(): RecordManager
    {
        return WorldModels::states();
    }
}
