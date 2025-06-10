<?php

require_once 'ConcreteComponentA.php';
require_once 'ConcreteComponentB.php';
require_once 'ConcreteVisitor1.php';
require_once 'ConcreteVisitor2.php';

// Client code demonstrating Visitor pattern
$components = [
    new ConcreteComponentA(),
    new ConcreteComponentB(),
];

$visitor1 = new ConcreteVisitor1();
foreach ($components as $component) {
    $component->accept($visitor1);
}

echo "\n";

$visitor2 = new ConcreteVisitor2();
foreach ($components as $component) {
    $component->accept($visitor2);
}