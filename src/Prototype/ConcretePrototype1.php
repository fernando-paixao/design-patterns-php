<?php

require_once 'Prototype.php';

class ConcretePrototype1 implements Prototype
{
    private $property;

    public function __construct(string $property)
    {
        $this->property = $property;
    }

    public function clone(): Prototype
    {
        return new self($this->property);
    }

    public function operation(): string
    {
        return "ConcretePrototype1 with property: {$this->property}";
    }
}