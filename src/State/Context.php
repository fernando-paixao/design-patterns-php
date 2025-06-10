<?php

require_once 'State.php';

class Context
{
    private $state;

    public function __construct(State $state)
    {
        $this->transitionTo($state);
    }

    public function transitionTo(State $state): void
    {
        echo "Context: Transition to " . get_class($state) . ".\n";
        $this->state = $state;
        $this->state->setContext($this);
    }

    public function request1(): void
    {
        $this->state->handle1($this);
    }

    public function request2(): void
    {
        $this->state->handle2($this);
    }
}