<?php

class ConcreteFlyweight implements Flyweight
{
    private $intrinsicState;

    public function __construct(string $intrinsicState)
    {
        $this->intrinsicState = $intrinsicState;
    }

    public function operation(string $extrinsicState): void
    {
        echo "ConcreteFlyweight: Intrinsic State - " . $this->intrinsicState . ", Extrinsic State - " . $extrinsicState . "\n";
    }
}

?>