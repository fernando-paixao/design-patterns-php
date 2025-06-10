<?php

class Singleton
{
    private static $instance;

    private function __construct() {}

    public static function getInstance(): Singleton
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __clone() {}

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }
}