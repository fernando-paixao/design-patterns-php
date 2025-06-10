<?php

class ConcreteMediator implements Mediator
{
    private $component1;
    private $component2;

    public function setComponent1(Component1 $component): void
    {
        $this->component1 = $component;
    }

    public function setComponent2(Component2 $component): void
    {
        $this->component2 = $component;
    }

    public function notify(object $sender, string $event): void
    {
        if ($event === "A") {
            echo "Mediator reacts on A and triggers following operations:\n";
            $this->component2->doC();
        }

        if ($event === "D") {
            echo "Mediator reacts on D and triggers following operations:\n";
            $this->component1->doB();
            $this->component2->doC();
        }
    }
}

?>