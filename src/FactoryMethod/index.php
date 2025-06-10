<?php

require_once 'Creator.php';
require_once 'ConcreteCreator1.php';
require_once 'ConcreteCreator2.php';

// Client code demonstrating Factory Method pattern
function clientCode(Creator $creator)
{
    echo "Client: I'm not aware of the creator's class, but it still works.\n"
        . $creator->someOperation() . "\n";
}

echo "App: Launched with ConcreteCreator1.\n";
clientCode(new ConcreteCreator1());
echo "\n";

echo "App: Launched with ConcreteCreator2.\n";
clientCode(new ConcreteCreator2());