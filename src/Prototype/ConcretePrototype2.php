<?php

require_once 'Prototype.php';

class ConcretePrototype2 implements Prototype
{
    private $property;

    public function __construct(int $property)
    {
        $this->property = $property;
    }

    public function clone(): Prototype
    {
        return new self($this->property);
    }

    public function operation(): string
    {
        return "ConcretePrototype2 with property: {$this->property}";
    }
}