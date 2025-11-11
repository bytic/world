<?php

namespace ByTIC\World\Tests\States\Models;

use ByTIC\World\States\Models\State;
use ByTIC\World\Tests\TestCase;

class StateTest extends TestCase
{
    public function testToArray()
    {
        $state = new State();
        $state->name = 'California';
        $state->code = 'CA';
        $state->country_code = 'US';

        $array = $state->toArray();

        static::assertIsArray($array);
        static::assertEquals('California', $array['name']);
        static::assertEquals('CA', $array['code']);
        static::assertEquals('US', $array['country_code']);
    }
}
