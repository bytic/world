<?php

namespace ByTIC\World\Tests;

use ByTIC\World\WorldServiceProvider;
use Mockery;
use Nip\Config\Config;
use Nip\Container\Utility\Container;

/**
 * Class AbstractTest
 */
abstract class TestCase extends \Bytic\Phpqa\PHPUnit\TestCase
{

    protected function loadConfig($data = [])
    {
        $config = config();
        $configNew = new Config(['world' => $data], true);
        Container::container()->set('config', $config->merge($configNew));
    }

    protected function loadConfigFromFixture($name)
    {
        $config = require TEST_FIXTURE_PATH . '/config/' . $name . '.php';
        $this->loadConfig($config);
    }

    protected function loadServiceProvider(): WorldServiceProvider
    {
        $container = Container::container();
        $provider = new WorldServiceProvider();
        $provider->setContainer($container);
        $provider->register();
        return $provider;
    }

    protected function loadFakeTranslator()
    {
        $translator = Mockery::mock('translator');
        $translator->shouldReceive('trans')->andReturnArg(0);

        $container = Container::container();
        $container->set('translator', $translator);
    }
}
