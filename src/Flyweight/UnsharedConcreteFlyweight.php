<?php

class UnsharedConcreteFlyweight implements Flyweight
{
    private $allState;

    public function __construct(string $allState)
    {
        $this->allState = $allState;
    }

    public function operation(string $extrinsicState): void
    {
        echo "UnsharedConcreteFlyweight: All State - " . $this->allState . ", Extrinsic State - " . $extrinsicState . "\n";
    }
}

?>