<?php

require_once 'IterableCollection.php';
require_once 'ConcreteCollection.php';
require_once 'IteratorInterface.php';
require_once 'ConcreteIterator.php';

// Client code
echo "Iterator Pattern Example\n\n";

$collection = new ConcreteCollection();
$collection->addItem("First");
$collection->addItem("Second");
$collection->addItem("Third");

$iterator = $collection->getIterator();

while ($iterator->hasNext()) {
    echo "Item: " . $iterator->next() . "\n";
}

?>