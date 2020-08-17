<?php

namespace Structural\Facade;

require_once "vendor/autoload.php";

$computer = new ComputerFacade();

print $computer->run();
