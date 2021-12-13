<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

function doOperation(ProductCreator $creator): void
{
    //program doesn't know which creator/product will be used here
    $creator->doOperation();
}

doOperation(new ProductACreator());
doOperation(new ProductBCreator());
