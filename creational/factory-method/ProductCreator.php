<?php
declare(strict_types=1);

abstract class ProductCreator
{
    //factory method
    abstract public function createProduct(): Product;

    public function doOperation(): void
    {
        $product = $this->createProduct();

        echo($product->getName());
    }
}
