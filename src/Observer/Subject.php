<?php

require_once 'Observer.php';

class Subject
{
    private $observers = [];
    private $state;

    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void
    {
        $key = array_search($observer, $this->observers, true);
        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function someBusinessLogic(): void
    {
        $this->state = rand(0, 10);
        echo "Subject: My state has changed to: {$this->state}\n";
        $this->notify();
    }

    public function getState(): int
    {
        return $this->state;
    }
}