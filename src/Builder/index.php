<?php

require_once 'Director.php';
require_once 'ConcreteBuilder1.php';
require_once 'Product.php';

// Client code demonstrating Builder pattern
$director = new Director();
$builder = new ConcreteBuilder1();
$director->setBuilder($builder);

echo "Standard basic product:\n";
$director->buildMinimalViableProduct();
$builder->getProduct()->listParts();

echo "\n";

echo "Standard full featured product:\n";
$director->buildFullFeaturedProduct();
$builder->getProduct()->listParts();

echo "\n";

echo "Custom product:\n";
$builder->producePartA();
$builder->producePartC();
$builder->getProduct()->listParts();