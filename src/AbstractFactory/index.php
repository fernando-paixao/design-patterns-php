<?php

require_once 'AbstractFactory.php';
require_once 'ConcreteFactory1.php';
require_once 'ConcreteFactory2.php';
require_once 'AbstractProductA.php';
require_once 'AbstractProductB.php';

// Client code demonstrating Abstract Factory pattern
function clientCode(AbstractFactory $factory)
{
    $productA = $factory->createProductA();
    $productB = $factory->createProductB();

    echo $productB->usefulFunctionB() . "\n";
    echo $productB->anotherUsefulFunctionB($productA) . "\n";
}

echo "Client: Testing client code with the first factory type:\n";
clientCode(new ConcreteFactory1());

echo "\n";

echo "Client: Testing the same client code with the second factory type:\n";
clientCode(new ConcreteFactory2());