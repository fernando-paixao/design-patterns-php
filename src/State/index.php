<?php

require_once 'Context.php';
require_once 'ConcreteStateA.php';
require_once 'ConcreteStateB.php';

// Client code demonstrating State pattern
$context = new Context(new ConcreteStateA());

$context->request1();
$context->request2();