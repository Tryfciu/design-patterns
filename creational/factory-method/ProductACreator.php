<?php

declare(strict_types=1);

class ProductACreator extends ProductCreator
{
    public function createProduct(): Product
    {
        return new ProductA();
    }
}
