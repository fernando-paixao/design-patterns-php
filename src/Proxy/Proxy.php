<?php

class Proxy implements Subject
{
    private $realSubject;

    public function __construct(RealSubject $realSubject)
    {
        $this->realSubject = $realSubject;
    }

    public function request(): void
    {
        if ($this->checkAccess()) {
            $this->realSubject->request();
            $this->logAccess();
        }
    }

    private function checkAccess(): bool
    {
        echo "Proxy: Checking access prior to firing a real request.\n";
        return true;
    }

    private function logAccess(): void
    {
        echo "Proxy: Logging the time of request.\n";
    }
}

?>