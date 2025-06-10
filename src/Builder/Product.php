<?php

class Product
{
    private $parts = [];

    public function addPart(string $part): void
    {
        $this->parts[] = $part;
    }

    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . "\n\n";
    }
}