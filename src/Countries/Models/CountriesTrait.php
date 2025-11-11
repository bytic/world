<?php

namespace  ByTIC\World\Countries\Models;

use ByTIC\World\Base\Models\Behaviours\HasSaleable\RepositoryHasSaleable;
use ByTIC\World\Utility\PackageConfig;
use ByTIC\World\Utility\WorldModels;
use ByTIC\World\Base\Models\Behaviours\Timestampable\TimestampableManagerTrait;

trait CountriesTrait
{
    use TimestampableManagerTrait;

    protected function generateTable(): string
    {
        return PackageConfig::tableName(WorldModels::WORLD_COUNTRIES, Countries::TABLE);
    }
}