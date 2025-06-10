<?php

require_once 'FlyweightFactory.php';
require_once 'Flyweight.php';
require_once 'ConcreteFlyweight.php';
require_once 'UnsharedConcreteFlyweight.php';

// Client code
echo "Flyweight Pattern Example\n\n";

$factory = new FlyweightFactory();

$flyweight1 = $factory->getFlyweight("shared-state");
$flyweight2 = $factory->getFlyweight("shared-state");
$unshared = new UnsharedConcreteFlyweight("unique-state");

// Using the flyweights
echo "Client: Calling operation() on shared flyweights:\n";
$flyweight1->operation("extrinsic-state-1");
$flyweight2->operation("extrinsic-state-2");

echo "\nClient: Calling operation() on unshared flyweight:\n";
$unshared->operation("extrinsic-state-3");

?>