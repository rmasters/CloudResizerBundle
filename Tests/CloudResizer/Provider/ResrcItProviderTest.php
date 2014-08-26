<?php

namespace CrowdReactive\CloudResizerBundle\Tests\CloudResizer\Provider;

use CrowdReactive\CloudResizerBundle\CloudResizer\Provider\ResrcIt;

class ResrcItProviderTest extends \PHPUnit_Framework_TestCase
{
    /** @var ResrcIt */
    protected $provider;

    public function setUp()
    {
        $this->provider = new ResrcIt();
    }

    public function testBuild()
    {
        $url = $this->provider->build(['s' => 'w280', 'o' => '60(80)'], 'http://google.com/logo.png');
        $this->assertEquals('//app.resrc.it/s=w280/o=60(80)/http://google.com/logo.png', $url);
    }
}