<?php

class ConcreteCollection implements IterableCollection
{
    private $items = [];

    public function addItem(string $item): void
    {
        $this->items[] = $item;
    }

    public function getIterator(): IteratorInterface
    {
        return new ConcreteIterator($this->items);
    }
}

?>