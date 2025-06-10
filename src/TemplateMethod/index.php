<?php

require_once 'AbstractClass.php';
require_once 'ConcreteClass1.php';
require_once 'ConcreteClass2.php';

// Client code demonstrating Template Method pattern
$class1 = new ConcreteClass1();
$class1->templateMethod();

echo "\n";

$class2 = new ConcreteClass2();
$class2->templateMethod();