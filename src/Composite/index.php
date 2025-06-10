<?php

require_once 'Component.php';
require_once 'Leaf.php';
require_once 'Composite.php';

// Client code
echo "Composite Pattern Example\n\n";

$leaf1 = new Leaf();
$leaf2 = new Leaf();
$composite = new Composite();

$composite->add($leaf1);
$composite->add($leaf2);

// Using the composite structure
echo "Client: Calling operation() on leaf:\n";
$leaf1->operation();

echo "\nClient: Calling operation() on composite:\n";
$composite->operation();

?>