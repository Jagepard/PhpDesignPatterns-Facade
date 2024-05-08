<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Facade;

class ComputerFacade
{
    /**
     * Prepares the components
     * -----------------------
     * Подготавливает компоненты
     */
    public function __construct(
        private PowerManager $powerSwitch                      = new PowerManager(), 
        private RandomAccessMemory $randomAccessMemory         = new RandomAccessMemory(),
        private CentralProcessingUnit $centralProcessingUnit   = new CentralProcessingUnit(),
        private GraphicsProcessingUnit $graphicsProcessingUnit = new GraphicsProcessingUnit()
    ){}

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
