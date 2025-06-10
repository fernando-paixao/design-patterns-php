<?php

require_once 'Decorator.php';

class ConcreteDecoratorA extends Decorator
{
    public function operation()
    {
        echo "ConcreteDecoratorA: Before operation.\n";
        parent::operation();
        echo "ConcreteDecoratorA: After operation.\n";
    }
}

?>