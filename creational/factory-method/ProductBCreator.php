<?php

declare(strict_types=1);

class ProductBCreator extends ProductCreator
{
    public function createProduct(): Product
    {
        return new ProductB();
    }
}
