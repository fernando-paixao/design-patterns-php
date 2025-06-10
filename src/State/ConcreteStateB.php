<?php

require_once 'State.php';
require_once 'Context.php';

class ConcreteStateB implements State
{
    private $context;

    public function setContext(Context $context): void
    {
        $this->context = $context;
    }

    public function handle1(Context $context): void
    {
        echo "ConcreteStateB handles request1.\n";
    }

    public function handle2(Context $context): void
    {
        echo "ConcreteStateB handles request2.\n";
        echo "ConcreteStateB wants to change the state of the context.\n";
        $this->context->transitionTo(new ConcreteStateA());
    }
}