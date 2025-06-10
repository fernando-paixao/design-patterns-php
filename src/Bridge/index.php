<?php

require_once 'Abstraction.php';
require_once 'RefinedAbstraction.php';
require_once 'Implementor.php';
require_once 'ConcreteImplementorA.php';
require_once 'ConcreteImplementorB.php';

// Client code demonstrating Bridge pattern
$implementorA = new ConcreteImplementorA();
$abstraction = new RefinedAbstraction($implementorA);
$abstraction->operation();

echo "\n";

$implementorB = new ConcreteImplementorB();
$abstraction = new RefinedAbstraction($implementorB);
$abstraction->operation();