<?php

require_once 'Builder.php';
require_once 'Product.php';

class ConcreteBuilder1 implements Builder
{
    private $product;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->product = new Product();
    }

    public function producePartA(): void
    {
        $this->product->addPart("PartA1");
    }

    public function producePartB(): void
    {
        $this->product->addPart("PartB1");
    }

    public function producePartC(): void
    {
        $this->product->addPart("PartC1");
    }

    public function getProduct(): Product
    {
        $result = $this->product;
        $this->reset();
        return $result;
    }
}