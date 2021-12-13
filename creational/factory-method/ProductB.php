<?php

declare(strict_types=1);

class ProductB implements Product
{
    public function getName(): string
    {
        return 'ProductB';
    }
}
