<?php

require_once 'Subsystem1.php';
require_once 'Subsystem2.php';

class Facade
{
    private $subsystem1;
    private $subsystem2;

    public function __construct(Subsystem1 $subsystem1, Subsystem2 $subsystem2)
    {
        $this->subsystem1 = $subsystem1;
        $this->subsystem2 = $subsystem2;
    }

    public function operation(): string
    {
        $result = "Facade initializes subsystems:\n";
        $result .= $this->subsystem1->operation1();
        $result .= $this->subsystem2->operation1();
        $result .= "Facade orders subsystems to perform the action:\n";
        $result .= $this->subsystem1->operationN();
        $result .= $this->subsystem2->operationZ();
        return $result;
    }
}

?>