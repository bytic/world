<?php

namespace  ByTIC\World\Countries\Models;

use ByTIC\World\Base\Models\Traits\CommonRecordsTrait;
use ByTIC\World\Base\Models\Traits\HasDatabaseConnectionTrait;
use ByTIC\World\Utility\PackageConfig;
use ByTIC\World\Utility\WorldModels;
use ByTIC\World\Base\Models\Behaviours\Timestampable\TimestampableManagerTrait;

trait CountriesTrait
{
    use CommonRecordsTrait;
    use TimestampableManagerTrait;
    use HasDatabaseConnectionTrait;

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