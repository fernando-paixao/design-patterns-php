<?php

require_once 'AbstractFactory.php';
require_once 'ConcreteProductA1.php';
require_once 'ConcreteProductB1.php';

class ConcreteFactory1 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA1();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB1();
    }
}