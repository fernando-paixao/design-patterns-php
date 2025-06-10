<?php

require_once 'TargetInterface.php';
require_once 'Adaptee.php';

class Adapter implements TargetInterface
{
    private $adaptee;

    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function request()
    {
        echo $this->adaptee->specificRequest() . "\n";
    }
}

?>