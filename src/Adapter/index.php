<?php

require_once 'TargetInterface.php';
require_once 'Adaptee.php';
require_once 'Adapter.php';

// Client code
echo "Adapter Pattern Example\n\n";

$adaptee = new Adaptee();
$adapter = new Adapter($adaptee);

// Using the adapter to make Adaptee compatible with TargetInterface
echo "Client: Calling specificRequest() through the Adapter:\n";
$adapter->request();

?>