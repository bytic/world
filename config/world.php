<?php

use ByTIC\World\Countries\Models\Countries;
use ByTIC\World\States\Models\States;
use ByTIC\World\Utility\WorldModels;

return [
    'models' => [
        WorldModels::WORLD_COUNTRIES => Countries::class,
        WorldModels::WORLD_STATES => States::class,
    ],

    'tables' => [
        WorldModels::WORLD_COUNTRIES => Countries::TABLE,
        WorldModels::WORLD_STATES => States::TABLE,
    ],

    'database' => [
        'connection' => 'main',
        'migrations' => true,
    ],
];
