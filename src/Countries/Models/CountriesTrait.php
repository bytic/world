<?php

namespace  ByTIC\World\Countries\Models;

use ByTIC\World\Base\Models\Behaviours\HasSaleable\RepositoryHasSaleable;
use ByTIC\World\Utility\PackageConfig;
use ByTIC\World\Utility\WorldModels;
use ByTIC\World\Base\Models\Behaviours\Timestampable\TimestampableManagerTrait;
use KM42\Common\Events\Actions\Filters\EventsInjectParamsAction;

trait CountriesTrait
{
    use TimestampableManagerTrait;

    /**
     * @param array $params
     */
    protected function injectParams(&$params = [])
    {
        parent::injectParams($params);

        $params['order'][] = ['name', 'asc'];
    }

    protected function generateTable(): string
    {
        return PackageConfig::tableName(WorldModels::WORLD_COUNTRIES, Countries::TABLE);
    }
}