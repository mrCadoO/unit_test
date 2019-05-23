<?php

use App\Application;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    private $app;

    protected function setUp()
    {
        $this->app = new Application();
    }

    protected function tearDown()
    {
        $this->app = NULL;
    }

    public function testAdd()
    {
        $result = $this->app->add(1, 2);
        $this->assertEquals(3, $result);
    }
}
