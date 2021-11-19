<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$originator = new Originator('Bob', 20);
$caretaker = new Caretaker($originator);
$caretaker->addSnapshot();
$originator->increaseAccountBalance(30);
$caretaker->addSnapshot();

var_dump($originator);
$originator->restore($caretaker->getSnapshots()[0]);
var_dump($originator);
