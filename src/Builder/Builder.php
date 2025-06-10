<?php

require_once 'Product.php';

interface Builder
{
    public function producePartA(): void;
    public function producePartB(): void;
    public function producePartC(): void;
}