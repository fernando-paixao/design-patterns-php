<?php

require_once 'Decorator.php';

class ConcreteDecoratorB extends Decorator
{
    public function operation()
    {
        echo "ConcreteDecoratorB: Before operation.\n";
        parent::operation();
        echo "ConcreteDecoratorB: After operation.\n";
    }

    public function addedBehavior()
    {
        echo "ConcreteDecoratorB: Additional behavior.\n";
    }
}

?>