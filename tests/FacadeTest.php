<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Facade\Tests;

use Structural\Facade\ComputerFacade;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class FacadeTest extends PHPUnit_Framework_TestCase
{
    private ComputerFacade $computer;

    protected function setUp(): void
    {
        $this->computer = new ComputerFacade();
    }

    public function testPersonalComputerFacade()
    {
        $this->assertEquals("Power on\nCPU run\nRAM run\nGPU run\n", $this->computer->run());
    }
}
