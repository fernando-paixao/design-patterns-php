<?php

require_once 'Implementor.php';

abstract class Abstraction
{
    protected $implementor;

    public function __construct(Implementor $implementor)
    {
        $this->implementor = $implementor;
    }

    abstract public function operation(): void;
}