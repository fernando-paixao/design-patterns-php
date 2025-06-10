<?php

require_once 'Component.php';
require_once 'Visitor.php';

class ConcreteComponentB implements Component
{
    public function accept(Visitor $visitor): void
    {
        $visitor->visitConcreteComponentB($this);
    }

    public function specialMethodOfConcreteComponentB(): string
    {
        return "B";
    }
}