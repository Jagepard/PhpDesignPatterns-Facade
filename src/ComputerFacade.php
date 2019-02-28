<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Facade;

/**
 * Class PersonalComputerFacade
 * @package Structural\Facade
 */
class ComputerFacade
{
    /**
     * @var PowerManager
     */
    private $powerSwitch;
    /**
     * @var RandomAccessMemory
     */
    private $randomAccessMemory;
    /**
     * @var CentralProcessingUnit
     */
    private $centralProcessingUnit;
    /**
     * @var GraphicsProcessingUnit
     */
    private $graphicsProcessingUnit;

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
        return
            $this->powerSwitch->turnPower() .
            $this->centralProcessingUnit->execute() .
            $this->randomAccessMemory->load() .
            $this->graphicsProcessingUnit->render();
    }
}
