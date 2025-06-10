<?php

require_once 'Subject.php';
require_once 'Observer.php';
require_once 'ConcreteObserverA.php';
require_once 'ConcreteObserverB.php';

// Client code demonstrating Observer pattern
$subject = new Subject();

$observerA = new ConcreteObserverA();
$subject->attach($observerA);

$observerB = new ConcreteObserverB();
$subject->attach($observerB);

$subject->someBusinessLogic();
$subject->someBusinessLogic();

$subject->detach($observerB);

$subject->someBusinessLogic();