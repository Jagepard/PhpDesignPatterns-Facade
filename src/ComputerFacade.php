<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Facade;

class ComputerFacade
{
    private PowerManager $powerSwitch;
    private RandomAccessMemory $randomAccessMemory;
    private CentralProcessingUnit $centralProcessingUnit;
    private GraphicsProcessingUnit $graphicsProcessingUnit;

    /**
     * Prepares the components
     * -----------------------
     * Подготавливает компоненты
     */
    public function __construct()
    {
        $this->powerSwitch            = new PowerManager();
        $this->centralProcessingUnit  = new CentralProcessingUnit();
        $this->randomAccessMemory     = new RandomAccessMemory();
        $this->graphicsProcessingUnit = new GraphicsProcessingUnit();
    }

    /**
     * Starts the computer
     * -------------------
     * Запускает компьютер
     *
     * @return void
     */
    public function run()
    {
        return
            $this->powerSwitch->turnPower() .
            $this->centralProcessingUnit->execute() .
            $this->randomAccessMemory->load() .
            $this->graphicsProcessingUnit->render();
    }
}
