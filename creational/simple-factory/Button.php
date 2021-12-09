<?php

declare(strict_types=1);

abstract class Button
{
    public function __construct(public int $height,public int $width) {
    }

    public abstract function click(): string;
}
