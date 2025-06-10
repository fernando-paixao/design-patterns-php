<?php

require_once 'AbstractClass.php';

class ConcreteClass2 extends AbstractClass
{
    protected function requiredOperations1(): void
    {
        echo "ConcreteClass2 says: Implemented Operation1\n";
    }

    protected function requiredOperations2(): void
    {
        echo "ConcreteClass2 says: Implemented Operation2\n";
    }
}