<?php

require_once 'Memento.php';

class Originator
{
    private $state;

    public function __construct(string $state)
    {
        $this->state = $state;
    }

    public function doSomething(): void
    {
        $this->state = $this->generateRandomString();
        echo "Originator: My state has changed to: {$this->state}\n";
    }

    private function generateRandomString(): string
    {
        return substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 10);
    }

    public function save(): Memento
    {
        return new Memento($this->state);
    }

    public function restore(Memento $memento): void
    {
        $this->state = $memento->getState();
        echo "Originator: My state has restored to: {$this->state}\n";
    }
}