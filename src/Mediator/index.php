<?php

require_once 'Mediator.php';
require_once 'ConcreteMediator.php';
require_once 'BaseComponent.php';
require_once 'Component1.php';
require_once 'Component2.php';

// Client code
echo "Mediator Pattern Example\n\n";

$mediator = new ConcreteMediator();
$component1 = new Component1($mediator);
$component2 = new Component2($mediator);

$mediator->setComponent1($component1);
$mediator->setComponent2($component2);

echo "Client: Triggers operation A on Component1:\n";
$component1->doA();

echo "\nClient: Triggers operation D on Component2:\n";
$component2->doD();

?>