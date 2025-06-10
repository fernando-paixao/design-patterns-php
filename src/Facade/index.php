<?php

require_once 'Subsystem1.php';
require_once 'Subsystem2.php';
require_once 'Facade.php';

// Client code
echo "Facade Pattern Example\n\n";

$subsystem1 = new Subsystem1();
$subsystem2 = new Subsystem2();
$facade = new Facade($subsystem1, $subsystem2);

// Using the facade to simplify complex operations
echo "Client: Calling operation() through facade:\n";
$facade->operation();

?>