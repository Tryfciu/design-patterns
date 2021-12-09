<?php

declare(strict_types=1);

class IOSButton extends Button
{
    public function click(): string
    {
        return "Sending request to IOS system";
    }
}
