<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$type = ButtonType::ANDROID;
$height = 20;
$width = 20;

$button = ButtonFactory::create($type, $width, $height);

echo($button->click());
