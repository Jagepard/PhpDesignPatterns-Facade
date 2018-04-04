<?php
/**
 * Date: 04.04.18
 * Time: 15:07
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Structural\Facade;

/**
 * Class PCFacade
 * @package Structural\Facade
 */
/**
 * Class PersonalComputerFacade
 * @package Structural\Facade
 */
class PersonalComputerFacade
{

    /**
     * @var PowerManager
     */
    protected $powerSwitch;
    /**
     * @var CentralProcessingUnit
     */
    protected $centralProcessingUnit;
    /**
     * @var RandomAccessMemory
     */
    protected $randomAccessMemory;
    /**
     * @var GraphicsProcessingUnit
     */
    protected $graphicsProcessingUnit;

    /**
     * PersonalComputerFacade constructor.
     */
    public function __construct()
    {
        $this->powerSwitch            = new PowerManager();
        $this->centralProcessingUnit  = new CentralProcessingUnit();
        $this->randomAccessMemory     = new RandomAccessMemory();
        $this->graphicsProcessingUnit = new GraphicsProcessingUnit();
    }

    public function run()
    {
        $this->getPowerSwitch()->turnPower();
        $this->getCentralProcessingUnit()->execute();
        $this->getRandomAccessMemory()->load();
        $this->getGraphicsProcessingUnit()->render();
    }

    /**
     * @return PowerManager
     */
    public function getPowerSwitch()
    {
        return $this->powerSwitch;
    }

    /**
     * @return CentralProcessingUnit
     */
    public function getCentralProcessingUnit()
    {
        return $this->centralProcessingUnit;
    }

    /**
     * @return RandomAccessMemory
     */
    public function getRandomAccessMemory()
    {
        return $this->randomAccessMemory;
    }

    /**
     * @return GraphicsProcessingUnit
     */
    public function getGraphicsProcessingUnit()
    {
        return $this->graphicsProcessingUnit;
    }
}
