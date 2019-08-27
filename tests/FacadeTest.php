<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Facade\Tests;

use Structural\Facade\ComputerFacade;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class FacadeTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var ComputerFacade
     */
    private $computer;

    protected function setUp(): void
    {
        $this->computer = new ComputerFacade();
    }

    public function testPersonalComputerFacade()
    {
        $this->assertEquals("PC run\nCPU run\nRAM run\nGPU run\n", $this->getComputer()->run());
    }

    /**
     * @return ComputerFacade
     */
    public function getComputer(): ComputerFacade
    {
        return $this->computer;
    }
}
