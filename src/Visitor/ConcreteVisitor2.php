<?php

require_once 'Visitor.php';
require_once 'ConcreteComponentA.php';
require_once 'ConcreteComponentB.php';

class ConcreteVisitor2 implements Visitor
{
    public function visitConcreteComponentA(ConcreteComponentA $element): void
    {
        echo "ConcreteVisitor2: " . $element->exclusiveMethodOfConcreteComponentA() . " + ConcreteVisitor2\n";
    }

    public function visitConcreteComponentB(ConcreteComponentB $element): void
    {
        echo "ConcreteVisitor2: " . $element->specialMethodOfConcreteComponentB() . " + ConcreteVisitor2\n";
    }
}