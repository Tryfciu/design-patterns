<?php

declare(strict_types=1);

class AndroidButton extends Button
{
    public function click(): string
    {
        return "Sending request to Android system";
    }
}
