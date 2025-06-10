<?php

require_once 'Strategy.php';

class Context
{
    private $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(Strategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function doSomeBusinessLogic(): void
    {
        $result = $this->strategy->doAlgorithm(['a', 'b', 'c', 'd', 'e']);
        echo implode(',', $result) . "\n";
    }
}