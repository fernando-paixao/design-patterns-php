<?php

require_once 'Creator.php';
require_once 'ConcreteProduct1.php';

class ConcreteCreator1 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct1();
    }
}