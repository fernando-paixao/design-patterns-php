<?php

require_once 'AbstractFactory.php';
require_once 'ConcreteProductA2.php';
require_once 'ConcreteProductB2.php';

class ConcreteFactory2 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA2();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB2();
    }
}