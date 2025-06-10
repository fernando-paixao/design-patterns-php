<?php

require_once 'Visitor.php';
require_once 'ConcreteComponentA.php';
require_once 'ConcreteComponentB.php';

class ConcreteVisitor1 implements Visitor
{
    public function visitConcreteComponentA(ConcreteComponentA $element): void
    {
        echo "ConcreteVisitor1: " . $element->exclusiveMethodOfConcreteComponentA() . " + ConcreteVisitor1\n";
    }

    public function visitConcreteComponentB(ConcreteComponentB $element): void
    {
        echo "ConcreteVisitor1: " . $element->specialMethodOfConcreteComponentB() . " + ConcreteVisitor1\n";
    }
}