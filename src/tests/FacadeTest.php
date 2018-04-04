<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
use Structural\Facade\PersonalComputerFacade;


/**
 * Class FacadeTest
 */
class FacadeTest extends PHPUnit_Framework_TestCase
{

    protected $computer;

    protected function setUp(): void
    {
        $this->computer = new PersonalComputerFacade();
    }

    public function testPersonalComputerFacade()
    {
        $this->assertEquals("PC has powered \nCPU has running \nRAM has loaded \nGPU has rendered \n", $this->getComputer()->run());
    }

    /**
     * @return mixed
     */
    public function getComputer()
    {
        return $this->computer;
    }
}
