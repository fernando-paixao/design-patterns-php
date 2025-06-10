<?php

class ConcreteHandler2 extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "request2") {
            echo "ConcreteHandler2: Handling " . $request . "\n";
            return "ConcreteHandler2: Handled " . $request;
        }

        return parent::handle($request);
    }
}

?>