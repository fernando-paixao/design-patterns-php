<?php

require_once 'Component.php';
require_once 'Visitor.php';

class ConcreteComponentA implements Component
{
    public function accept(Visitor $visitor): void
    {
        $visitor->visitConcreteComponentA($this);
    }

    public function exclusiveMethodOfConcreteComponentA(): string
    {
        return "A";
    }
}