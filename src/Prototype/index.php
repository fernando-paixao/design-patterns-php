<?php

require_once 'Prototype.php';
require_once 'ConcretePrototype1.php';
require_once 'ConcretePrototype2.php';

// Client code demonstrating Prototype pattern
function clientCode(Prototype $prototype): void
{
    $clone = $prototype->clone();
    echo "Cloned: " . $clone->operation() . "\n";
}

$prototype1 = new ConcretePrototype1("Prototype1");
clientCode($prototype1);

$prototype2 = new ConcretePrototype2(42);
clientCode($prototype2);