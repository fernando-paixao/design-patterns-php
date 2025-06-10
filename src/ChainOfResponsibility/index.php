<?php

require_once 'Handler.php';
require_once 'AbstractHandler.php';
require_once 'ConcreteHandler1.php';
require_once 'ConcreteHandler2.php';

// Client code
echo "Chain of Responsibility Pattern Example\n\n";

$handler1 = new ConcreteHandler1();
$handler2 = new ConcreteHandler2();

// Create the chain
$handler1->setNext($handler2);

// Process requests
foreach (["request1", "request2", "request3"] as $request) {
    echo "Client: Processing request for " . $request . "\n";
    $handler1->handle($request);
    echo "\n";
}

?>