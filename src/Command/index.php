<?php

require_once 'Command.php';
require_once 'SimpleCommand.php';
require_once 'ComplexCommand.php';
require_once 'Receiver.php';
require_once 'Invoker.php';

// Client code
echo "Command Pattern Example\n\n";

$invoker = new Invoker();
$receiver = new Receiver();

$invoker->setOnStart(new SimpleCommand("Say Hi!"));
$invoker->setOnFinish(new ComplexCommand($receiver, "Send email", "Save report"));

$invoker->doSomethingImportant();

?>