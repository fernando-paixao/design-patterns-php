<?php

require_once 'Component.php';

class Leaf implements Component
{
    public function operation()
    {
        echo "Leaf: Performing operation.\n";
    }
}

?>