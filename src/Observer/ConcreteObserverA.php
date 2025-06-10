<?php

require_once 'Observer.php';
require_once 'Subject.php';

class ConcreteObserverA implements Observer
{
    public function update(Subject $subject): void
    {
        if ($subject->getState() < 3) {
            echo "ConcreteObserverA: Reacted to the event.\n";
        }
    }
}