<?php
namespace Steam;
use PHPUnit_Framework_TestCase;
use Steam\Configuration;
use Steam\Exception\InvalidConfigOptionException;

require '../src/Steam/Configuration.php';

class Configuration_Test extends PHPUnit_Framework_TestCase {

    public function test_setSteamKey()
    {
        $steamKey = '123';
        $configuration = new Configuration();
        $configuration->setSteamKey($steamKey);
        $this->assertInstanceOf('Configuration', $configuration);
    }

    public function test_getSteamKey()
    {
        $steamKey = '123';
        $configuration = new Configuration();
        $configuration->setSteamKey($steamKey);
        $this->assertEquals($steamKey, $configuration->getSteamKey());
    }

    public function test_setAppId()
    {
        $appId = 123;
        $configuration = new Configuration();
        $configuration->setAppId($appId);
        $this->assertInstanceOf('Configuration', $configuration);
    }

    public function test_getAppId()
    {
        $appId = 123;
        $configuration = new Configuration();
        $configuration->setAppId($appId);
        $this->assertEquals($appId, $configuration->getAppId());
    }

    public function test_getBaseSteamApiUrl()
    {
        $steamBaseUrl = 'http://api.steampowered.com/';
        $configuration = new Configuration();
        $this->assertEquals($steamBaseUrl, $configuration->getBaseSteamApiUrl());
    }

    /**
     * @expectedException InvalidConfigOptionException
     */
    public function test_setOptions_Exception()
    {
        $options = array('where_is_clearly_mistake' => true);
        $configuration = new Configuration();
        $configuration->setOptions($options);
    }
}