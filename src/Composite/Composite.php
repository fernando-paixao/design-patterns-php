<?php

require_once 'Component.php';

class Composite implements Component
{
    private $children = [];

    public function add(Component $component)
    {
        $this->children[] = $component;
    }

    public function operation()
    {
        echo "Composite: Operating on children:\n";
        foreach ($this->children as $child) {
            $child->operation();
        }
    }
}

?>