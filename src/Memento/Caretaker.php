<?php

require_once 'Memento.php';
require_once 'Originator.php';

class Caretaker
{
    private $originator;
    private $mementos = [];

    public function __construct(Originator $originator)
    {
        $this->originator = $originator;
    }

    public function backup(): void
    {
        $this->mementos[] = $this->originator->save();
    }

    public function undo(): void
    {
        if (empty($this->mementos)) {
            return;
        }

        $memento = array_pop($this->mementos);
        $this->originator->restore($memento);
    }
}