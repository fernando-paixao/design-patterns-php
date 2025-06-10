<?php

require_once 'Creator.php';
require_once 'ConcreteProduct2.php';

class ConcreteCreator2 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct2();
    }
}