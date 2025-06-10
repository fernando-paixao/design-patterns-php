<?php

require_once 'State.php';
require_once 'Context.php';

class ConcreteStateA implements State
{
    private $context;

    public function setContext(Context $context): void
    {
        $this->context = $context;
    }

    public function handle1(Context $context): void
    {
        echo "ConcreteStateA handles request1.\n";
        echo "ConcreteStateA wants to change the state of the context.\n";
        $this->context->transitionTo(new ConcreteStateB());
    }

    public function handle2(Context $context): void
    {
        echo "ConcreteStateA handles request2.\n";
    }
}