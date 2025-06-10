<?php

class ConcreteIterator implements IteratorInterface
{
    private $items;
    private $position = 0;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function hasNext(): bool
    {
        return $this->position < count($this->items);
    }

    public function next(): string
    {
        $item = $this->items[$this->position];
        $this->position++;
        return $item;
    }
}

?>