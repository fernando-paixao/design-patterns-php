<?php

require_once 'ComponentInterface.php';
require_once 'ConcreteComponent.php';
require_once 'Decorator.php';
require_once 'ConcreteDecoratorA.php';
require_once 'ConcreteDecoratorB.php';

// Client code
echo "Decorator Pattern Example\n\n";

$component = new ConcreteComponent();
$decoratorA = new ConcreteDecoratorA($component);
$decoratorB = new ConcreteDecoratorB($decoratorA);

// Using the decorated component
echo "Client: Simple component:\n";
$component->operation();

echo "\nClient: Decorated with A:\n";
$decoratorA->operation();

echo "\nClient: Decorated with B then A:\n";
$decoratorB->operation();

?>