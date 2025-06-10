<?php

require_once 'AbstractProductA.php';
require_once 'AbstractProductB.php';

interface AbstractFactory
{
    public function createProductA(): AbstractProductA;
    public function createProductB(): AbstractProductB;
}