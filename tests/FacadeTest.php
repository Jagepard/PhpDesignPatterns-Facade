<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Facade\Tests;

use Structural\Facade\PersonalComputerFacade;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

/**
 * Class FacadeTest
 */
class FacadeTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var PersonalComputerFacade
     */
    protected $computer;

    protected function setUp(): void
    {
        $this->computer = new PersonalComputerFacade();
    }

    public function testPersonalComputerFacade()
    {
        $this->assertEquals("PC run\nCPU run\nRAM run\nGPU run\n", $this->computer->run());
    }
}
