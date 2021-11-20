<?php

declare(strict_types=1);

class Singleton
{
    private static ?self $singleton = null;

    private function __construct()
    {
    }

    public static function getInstance(): self
    {
        if(!static::$singleton) {
            static::$singleton = new Singleton();
        }

        return static::$singleton;
    }
}
