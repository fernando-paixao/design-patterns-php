<?php

require_once 'Abstraction.php';

class RefinedAbstraction extends Abstraction
{
    public function operation(): void
    {
        echo "RefinedAbstraction: Extended operation with:\n";
        $this->implementor->operationImplementation();
    }
}