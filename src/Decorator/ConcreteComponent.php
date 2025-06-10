<?php

require_once 'ComponentInterface.php';

class ConcreteComponent implements ComponentInterface
{
    public function operation()
    {
        echo "ConcreteComponent: Basic operation.\n";
    }
}

?>