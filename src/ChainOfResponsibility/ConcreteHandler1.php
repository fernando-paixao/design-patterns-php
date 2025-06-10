<?php

class ConcreteHandler1 extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "request1") {
            echo "ConcreteHandler1: Handling " . $request . "\n";
            return "ConcreteHandler1: Handled " . $request;
        }

        return parent::handle($request);
    }
}

?>