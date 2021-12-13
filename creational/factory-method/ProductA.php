<?php

declare(strict_types=1);

class ProductA implements Product
{
    public function getName(): string
    {
        return 'ProductA';
    }
}
