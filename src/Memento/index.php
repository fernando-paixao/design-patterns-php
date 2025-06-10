<?php

require_once 'Originator.php';
require_once 'Caretaker.php';

// Client code demonstrating Memento pattern
$originator = new Originator("Initial state");
$caretaker = new Caretaker($originator);

$caretaker->backup();
$originator->doSomething();

$caretaker->backup();
$originator->doSomething();

$caretaker->backup();
$originator->doSomething();

// Restore to previous state
$caretaker->undo();
$caretaker->undo();
$caretaker->undo();