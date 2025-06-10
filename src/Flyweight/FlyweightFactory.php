<?php

class FlyweightFactory
{
    private $flyweights = [];

    public function getFlyweight(string $key): Flyweight
    {
        if (!isset($this->flyweights[$key])) {
            echo "FlyweightFactory: Can't find a flyweight, creating new one.\n";
            $this->flyweights[$key] = new ConcreteFlyweight($key);
        }

        return $this->flyweights[$key];
    }

    public function countFlyweights(): int
    {
        return count($this->flyweights);
    }
}

?>