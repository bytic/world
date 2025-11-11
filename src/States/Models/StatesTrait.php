<?php

namespace  ByTIC\World\States\Models;

use ByTIC\World\Utility\PackageConfig;
use ByTIC\World\Utility\WorldModels;
use ByTIC\World\Base\Models\Behaviours\Timestampable\TimestampableManagerTrait;

trait StatesTrait
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
        return PackageConfig::tableName(WorldModels::WORLD_STATES, States::TABLE);
    }
}