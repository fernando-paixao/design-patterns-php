<?php

require_once 'Implementor.php';

class ConcreteImplementorA implements Implementor
{
    public function operationImplementation(): void
    {
        echo "ConcreteImplementorA: Here's the result on platform A.\n";
    }
}