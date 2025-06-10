<?php

require_once 'Implementor.php';

class ConcreteImplementorB implements Implementor
{
    public function operationImplementation(): void
    {
        echo "ConcreteImplementorB: Here's the result on platform B.\n";
    }
}