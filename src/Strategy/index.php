<?php

require_once 'Context.php';
require_once 'ConcreteStrategyA.php';
require_once 'ConcreteStrategyB.php';

// Client code demonstrating Strategy pattern
$context = new Context(new ConcreteStrategyA());
echo "Client: Strategy is set to normal sorting.\n";
$context->doSomeBusinessLogic();

echo "\n";

echo "Client: Strategy is set to reverse sorting.\n";
$context->setStrategy(new ConcreteStrategyB());
$context->doSomeBusinessLogic();