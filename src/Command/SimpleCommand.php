<?php

class SimpleCommand implements Command
{
    private $payload;

    public function __construct(string $payload)
    {
        $this->payload = $payload;
    }

    public function execute(): void
    {
        echo "SimpleCommand: Doing something simple with (" . $this->payload . ")\n";
    }
}

?>