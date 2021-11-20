<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$singleton = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

if($singleton === $singleton2) {
    echo('There is always one instance of Singleton');
}
